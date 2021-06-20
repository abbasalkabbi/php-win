const form = document.querySelector(".data"), //heandle form
  button = form.querySelector("#send"); // heandle button submit
const successful = document.querySelector("#successful");
const er = document.querySelector("#error"),
  h1 = er.querySelector("h1");

form.onsubmit = (e) => {
  e.preventDefault();
};
// function content with php and send data
function senddata() {
  // start XMLHttpRequest
  let xhr = new XMLHttpRequest();
  // open xhr
  xhr.open("POST", "php/index.php", true);
  // on load
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;

        if (data == "successful") {
          // if data send
          // update users
          usersdata();
          // er div hide
          er.style.display = "none";
          // form div hide
          form.style.display = "none";
          // successful div show
          successful.style.display = "block";
        } else {
          er.style.display = "block";
          successful.display = "none";
          h1.innerText = data;
        }

        console.log(data);
      }
    }
  };
  // heandle data
  let formdata = new FormData(form);
  // seand data
  xhr.send(formdata);
}
// when click on button submit
button.onclick = () => senddata();
