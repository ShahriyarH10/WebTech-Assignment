function searchProduct() {
  const searchText = document.getElementById("search_text").value;

  const xhr = new XMLHttpRequest();
  xhr.open("GET", "searchAjax.php?NAME=" + searchText, true);

  xhr.onload = function () {
    if (this.status === 200) {
      document.getElementById("search_result").innerHTML = this.responseText;
    }
  };

  xhr.send();
}
