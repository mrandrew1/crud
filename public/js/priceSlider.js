$("#price_sslider").ionRangeSlider({
    min: 100,
    max: 1000,
    from: 550
});

var slider = document.getElementById("price__slider");
var output = document.getElementsByClassName("max")[0];
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function () {
    let price = this.value
    price = price.toString().split("").reverse().join("").match(/.{1,3}/g).map(function (item) {
        return item.split("").reverse().join("");
    }).reverse().join(" ");
    output.innerHTML = price;
}