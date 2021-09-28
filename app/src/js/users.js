const searchBar = document.querySelector('.users .search input');
const searchBtn = document.querySelector('.users .search button');
const usersList = document.querySelector('.users .users-list');

    searchBtn.addEventListener('click',()=>{
        searchBar.classList.toggle('active');
        searchBar.focus()
        searchBtn.classList.toggle('active');
        if(!searchBtn.classList.contains('active')){
            searchBar.value = ""; 
        }
    })
    
    searchBar.addEventListener('keyup',()=>{
        let searchTxt = searchBar.value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/search.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    usersList.innerHTML = data;
                }
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(`searchTxt= ${searchTxt}`);
    })
    
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'php/users.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
            if(!searchBar.value){
                usersList.innerHTML = data;
            }
            }
        }
    }
    xhr.send();
}, 500);