//Function for show and hide FAQ answers
function toggleFAQ(faq){
    const parent = faq.parentElement;
    parent.classList.toggle("active");

    const toggle = faq.querySelector(".faq-toggle");
    if(parent.classList.contains("active")) {
        toggle.textContent = "-";
    }else{
        toggle.textContent = "+";
    }
}