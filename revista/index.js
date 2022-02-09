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
    body.classList.toggle('dark-theme');
    mode.classList.toggle('fa-moon');
    mode.classList.toggle('fa-sun');
}