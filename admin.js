function setuptabs(){
    document.querySelectorAll(".tab-buton").forEach(button => {
        button.addEventListener("click", () => {
            const sidebar = button.parentElement;
            const tabscontainer= sidebar.parentElement;
            const tabsnumber = button.dataset.forTab;
            const tabtoactivate=tabscontainer.querySelector(`.tabcontent[data-tab="${tabsnumber}"]`);

            sidebar.querySelectorAll(".tab-buton").forEach(button => {
                button.classList.remove("tab-buton-active");
            });
            tabscontainer.querySelectorAll(".tabcontent").forEach(tab => {
                tab.classList.remove("tabcontent-active");
            });
            button.classList.add("tab-buton-active");
            tabtoactivate.classList.add("tabcontent-active");
            
    });
});
}
document.addEventListener("DOMContentLoaded", () => {
    setuptabs();
});