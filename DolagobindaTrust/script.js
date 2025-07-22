const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}


// when we click on hamburger icon its close 

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


  // faq section function

document.addEventListener("DOMContentLoaded", () => {
  const faqs = document.querySelectorAll(".faq");

  faqs.forEach(faq => {
      const question = faq.querySelector(".faq-question");
      const toggle = faq.querySelector(".faq-toggle");
      const answer = faq.querySelector(".faq-answer");

      question.addEventListener("click", () => {
          const isOpen = answer.classList.contains("open");

          faqs.forEach(f => {
              f.querySelector(".faq-answer").classList.remove("open");
              f.querySelector(".faq-toggle").textContent = "+";
          });

          if (!isOpen) {
              answer.classList.add("open");
              toggle.textContent = "−";
          }
      });
  });
});