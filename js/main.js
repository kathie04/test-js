document.addEventListener('DOMContentLoaded', function () {
    var page = 2;
    dataRequest(page, loadData);
    var button = document.getElementsByClassName('button-load-more')[0];
    var productSection = document.getElementsByClassName('product-section')[0];
    var productList = document.getElementsByClassName('layout-products')[0];
    var dataTotal;
    var click = false;
    var loaded = false;


    button.addEventListener('click', function () {
        productSection.classList.add('loading')
        click = true;
        if (loaded) {
            productSection.classList.remove('loading');
            addItem();
        }
    })

    function addItem() {
        productSection.classList.remove('loading');
        page++;
        var listItemHidden = document.querySelectorAll('.layout-products li.hidden');
        var listItem = document.querySelectorAll('.layout-products li');
        var heightItem = listItem[0].offsetHeight;
        for (var i = 0; i < listItemHidden.length; i++) {
            slideDown(listItemHidden[i], heightItem);
        }
        if (listItem.length == dataTotal) {
            button.classList.add('hidden');
        }
        click = false;
        loaded = false;
        dataRequest(page, loadData);
    }
    
    function waitingData() {
        productSection.classList.add('loading')
        loaded = false;
    }

    function loadData(data) {
        for (var i = 0; i < data.entities.length; i++) {
            productList.insertAdjacentHTML('beforeEnd', template(data.entities[i]))
        }
        productSection.classList.remove('loading');
        dataTotal = data.total;
    }

    function dataRequest(page, loadData) {
        var url = 'list.php?page=' + page;
        var ajaxRequest = new XMLHttpRequest();
        ajaxRequest.open('GET', url);
        ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
                productSection.classList.remove('loading')
                loadData(JSON.parse(ajaxRequest.responseText));
                loaded = true;
                if (click) {
                    addItem();
                }
            } else {
                waitingData();
            }
        };
        ajaxRequest.send();
    }

    function template(item) {
        return stringTemplate = '<li class="hidden"><a href="#" class="product-card"><div class="image"><img src="' +
            item.img + '" alt="' + item.title + '">' + (item.discountCost ? '<div class="sale">Sale</div>' : '') +
            (item.new ? '<div class="new">New</div>' : '') +
            '</div><h6>' + item.title + '</h6><p>' + item.description + '</p><div class="price"><span class="cost">$' +
            (item.discountCost ? item.discountCost : item.cost) + '.00</span>' +
            (item.discountCost ? ('<span class="discount-cost">' + item.cost + '.00</span>') : '') +
            '</div><div class="layout layout-button"><button class="button">add to cart</button>' +
            '<button class="button button-view">view</button></div></a></li>'
    }

    function slideDown(item, height) {
        let start = Date.now();
        let timer = setInterval(function() {
            let timePassed = Date.now() - start;
            if (timePassed >= height*2) {
                clearInterval(timer);
                item.classList.remove('hidden');
                return;
            }
            item.style.height = timePassed/2 + 'px';
        }, 50);
        item.style.marginBottom = 30 + 'px';
        item.style.paddingTop = 20 + 'px';
    }
})

