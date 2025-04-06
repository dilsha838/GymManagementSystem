const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
    navLinks.classList.toggle("open");

    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen?"ri-close-line":"ri-menu-line")
    
});

navLinks.addEventListener("click", (e) => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class" , "ri-menu-line");
});
const scrollRevealOption = {
    origin:"bottom",
    distance:"50px",
    duration:1000,
};
ScrollReveal().reveal(".header_image img",{
    ...scrollRevealOption,
    origin:"right",
});
ScrollReveal().reveal(".header_content h1",{
    ...scrollRevealOption,
    delay:500,
});
ScrollReveal().reveal(".header_content h2",{
    ...scrollRevealOption,
    delay:1000,
});
ScrollReveal().reveal(".header_content p",{
    ...scrollRevealOption,
    delay:1500,
});
ScrollReveal().reveal(".header_btn",{
    ...scrollRevealOption,
    delay:2000,
});

ScrollReveal().reveal(".about_image img",{
    ...scrollRevealOption,
    origin:"left",
});
ScrollReveal().reveal(".about_section_header",{
    ...scrollRevealOption,
    delay:500,
});
ScrollReveal().reveal(".about_content p",{
    ...scrollRevealOption,
    delay:1000,
});
ScrollReveal().reveal(".about_btn",{
    ...scrollRevealOption,
    delay:1500,
});
ScrollReveal().reveal(".service_card",{
   duration:1000,
   interval:500,
});

ScrollReveal().reveal(".facility_content.section_header",{
    ...scrollRevealOption,
});
ScrollReveal().reveal(".facility_content p",{
    ...scrollRevealOption,
    delay:500,
});

ScrollReveal().reveal(".mentor_card",{
    ...scrollRevealOption,
    interval:500,
});

ScrollReveal().reveal(".banner_content h2",{
    ...scrollRevealOption,
});
ScrollReveal().reveal(".banner_content p",{
    ...scrollRevealOption,
    delay:500,
});