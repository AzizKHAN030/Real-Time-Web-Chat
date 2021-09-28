const form = document.querySelector('.typing-area');
const inputField = form.querySelector('.input-field');
const sendBtn = form.querySelector('button');
const chatBox = document.querySelector('.chat-box');
const statusProfile = document.querySelector('.details p');
form.addEventListener('submit',(e)=>{
    e.preventDefault();    
})

sendBtn.addEventListener('click',()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/send.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = "";
                chatBox.innerHTML = "";
                if(!chatBox.classList.contains("active")){
                    if(height==chatBox.scrollTop){
                        scrollToBottom();
                    }
                }   
            }               
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
})

chatBox.onmouseenter = () =>{
    chatBox.classList.add("active")
}
chatBox.ontouchstart = ()=>{
    chatBox.classList.add("active")
}
chatBox.ontouchend = ()=>{
    chatBox.classList.remove("active")
}
chatBox.onmouseleave = () =>{
    chatBox.classList.remove("active")
}
let height;
setInterval(() => {

    height = chatBox.scrollHeight-500;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/recieve.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                const status = chatBox.querySelector('input[type="hidden"]');
                statusProfile.innerHTML = status.value;
                if(!chatBox.classList.contains("active")){
                    if(height==chatBox.scrollTop){
                        scrollToBottom();
                    }
                } 
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}