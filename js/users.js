const users = document.querySelector(".users");

function usersdata() {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/inc/usersdata.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        const Obj_users = JSON.parse(xhr.responseText);
        Obj_users.forEach((user) => {
          users.innerHTML += ` <li class="list-group-item bg-secondary mt-1 text-white">${user.firstname} ${user.lastname}</li>`;
        });
      }
    }
  };
  xhr.send();
}
usersdata();
