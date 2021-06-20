const users = document.querySelector(".users");
// load uesrs
function usersdata() {
  let xhr = new XMLHttpRequest();
  console.log("function run");
  xhr.open("GET", "../php/inc/usersdata.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        const Obj_users = JSON.parse(xhr.responseText);
        Obj_users.forEach((user) => {
          users.innerHTML += ` <li class="list-group-item bg-secondary mt-1 text-white" >Name :${user.firstname}
                ${user.lastname}
                <p>Email: ${user.email}</p>
                <button type="submit" class="btn-close btn-close-white remove btn-lg" aria-label="Close" value="${user.id}"
                    name='id'></button>
            </li>`;
        });
      }
    }
  };
  xhr.send();
}
// run function
usersdata();
