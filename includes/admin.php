<!DOCTYPE html>
<html>
<body>

<p id="bestellingen" class="bestellingen"></p>

<script>
    function GetOrders() {
        var GetOrders;
        GetOrders = new XMLHttpRequest();
        GetOrders.onreadystatechange = function () {
            if (GetOrders.readyState == 4 && GetOrders.status == 200) {
                showText(JSON.parse(GetOrders.responseText));
            }
        };
        GetOrders.open("GET", 'models/getOrders.php', true);
        GetOrders.send();
    }
    function showText(json) {
        var fulltext = '';
        for (var i = 0; i < json.length; i++) {
            var text = '';
            text += "<h3>bestelling " + json[i].id + "</h3><br>";
            text += json[i].name + "<br>";
            text += '0' + json[i].telNumber + "<br>";
            text += json[i].purchase + "<br>";
            text += '<button onclick="deletePurchase(' + json[i].id + ')">delete</button>';
            fulltext += text;

        }
        document.getElementById('bestellingen').innerHTML = fulltext;
        console.log('updated');
    }
    function deletePurchase(id) {
        var deletePurchase;
        deletePurchase = new XMLHttpRequest();
        deletePurchase.onreadystatechange = function () {
            if (deletePurchase.readyState == 4 && deletePurchase.status == 200) {
                GetOrders();
            }
        };
        deletePurchase.open("GET", 'models/deleteOrder.php?id=' + id, true);
        deletePurchase.send();
    }
    GetOrders();
    setInterval(GetOrders, 10000);

</script>

</body>
</html>
