var current_tab = 'inicio-tab';
function openTab(evt, tabName) {
    document.getElementById(current_tab)
        .style.display = "none";
    document.getElementById(tabName)
        .style.display = "block";

    current_tab = tabName;
}
function changeTheme() {
    const body = document.getElementById('body');
    const mode = document.getElementById('mode')
    if(body.classList.contains('dark-theme')){
        localStorage.setItem('tema', "light")
        
    }else{
        localStorage.setItem('tema', "dark")
    }
    body.classList.toggle('dark-theme');
    mode.classList.toggle('fa-moon');
    mode.classList.toggle('fa-sun');
}
window.addEventListener('load',(e)=>{
    const mode = document.getElementById('mode')

    if( localStorage.getItem('tema') === "dark"){

        body.classList.toggle('dark-theme');
        mode.classList.toggle('fa-moon');
        mode.classList.toggle('fa-sun');
    }

})

