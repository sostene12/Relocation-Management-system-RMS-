const faqs=document.getElementsByClassName("faq");

faqs.foreach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });
});
