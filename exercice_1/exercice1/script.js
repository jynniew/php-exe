window.addEventListener("load", function()
{
    var spans = document.getElementsByTagName("span");
    for (var i = 0; i < spans.length ; i++) {
        spans[i].addEventListener("click", function()
        {
            alert(this.innerHTML);
        });
    }
}
);