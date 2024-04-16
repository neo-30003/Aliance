const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
}

const openMenu = (event) => { // функция открывания меню
  menu.classList.add("is-open"); // вешает класс is-open
  mMenuToggle.classList.add("close-menu")
  document.body.style.overflow="hidden"; // запрещаем прокрутку сайта под меню
  lightModeOn();
};

const closeMenu = (event) => { // функция закрывания меню
  menu.classList.remove("is-open"); // убирает класс is-open
  mMenuToggle.classList.remove("close-menu")
  document.body.style.overflow=""; // возвращает прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});
mMenuToggle.addEventListener("click",(event) =>{
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".header-features-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    992: {
      slidesPerView: 2,
    },
  },
});

const swiperResearch = new Swiper(".research-slider", {
  loop: true,
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 576px
    768: {
      slidesPerView: 2,
    },
  },
});

const swiperBlogContent = new Swiper(".blog-slider-content", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
});

let currentModal; //текущее модальное окно
let modalDialog; // диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // окно с предупреждением

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатели модальных окон
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => { /* клик по переключателю */
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target); /* определение текущего открытого окна */
    currentModal.classList.toggle("is-open"); /*открытие текущего окна */
    modalDialog = currentModal.querySelector(".modal-dialog"); /* назначение диалогового окна */
    currentModal.addEventListener("click", event => { /* отслеживание клика по окну и пустым областям */
      if (!event.composedPath().includes(modalDialog)) { /* клик вне диалогового окна */
        currentModal.classList.remove("is-open"); /* закрытие диалогового окна */
      }
    });
  });
});
document.addEventListener("keyup", (event) => { /* отслеживание нажатия кнопки */
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) { /* проверка соответствия кнопке "Escape" и открытию текущего окна */
    currentModal.classList.toggle("is-open"); /* закрытие текущего окна */
  }
});

const ctaForm = document.querySelectorAll(".cta-form"); // Собираем формы
ctaForm.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
  .addField("[name=username]", [
    {
      rule: "required",
      errorMessage: "Укажите имя",
    },
    {
      rule: "maxLength",
      value: 50,
      errorMessage: "Максимум 50 символов",
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: "required",
      errorMessage: "Укажите номер телефона",
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; // наша форма
    const formData = new FormData(thisForm); // данные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          alertModal.classList.add("is-open");
          currentModal = alertModal;
          modalDialog = currentModal.querySelector(".modal-dialog");
          currentModal.addEventListener("click", event => {
            if (!event.composedPath().includes(modalDialog)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
});

const forms = document.querySelectorAll(".modal-form"); // Собираем формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
  .addField("[name=username]", [
    {
      rule: "required",
      errorMessage: "Укажите имя",
    },
    {
      rule: "maxLength",
      value: 50,
      errorMessage: "Максимум 50 символов",
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: "required",
      errorMessage: "Укажите номер телефона",
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; // наша форма
    const formData = new FormData(thisForm); // данные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          currentModal.classList.remove("is-open");
          alertModal.classList.add("is-open");
          currentModal = alertModal;
          modalDialog = currentModal.querySelector(".modal-dialog");
          currentModal.addEventListener("click", event => {
            if (!event.composedPath().includes(modalDialog)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
});

/* Префикс +7, даже если вводится 8 или 9 */	
const prefixNumber = (str) => {	
  /* если семерка, добавляется скобка */	
  if (str === "7") {	
    return "7 (";	
  }	
  /* если восьмерка, заменяется на +7 ( */	
  if (str === "8") {	
    return "+7 (";	
  }	
  /* если девятка, заменяется на +7 (9  */	
  if (str === "9") {	
    return "7 (9";	
  }	
  /* в остальных случаях просто 7 (  */	
  return "7 (";	
}; /* при любом раскладе будет +7 () */	

/* Отслеживание события ввода в любом поле */	
document.addEventListener("input", (e) => {	
  /* Проверка, что это поле имеет класс phone-mask */	
  if (e.target.classList.contains("phone-mask")) {	
    /* поле с телефоном помещается в переменную input */	
    const input = e.target;	
    /* добавляется плюс в начале номера */	
    const value = input.value.replace(/\D+/g, "");	
    /* длина номера 11 символов */	
    const numberLength = 11;	

    /* Создается переменная, куда будет записываться номер */	
    let result;	
    /* Если вводится 8... */	
    if (input.value.includes("+8") || input.value[0] === "8") {	
      /* Стирается восьмерку */	
      result = "";	
    } else {	
      /* Оставляется плюс в поле */	
      result = "+";	
    }	

    /* Запускается цикл, где перебирается каждая цифра от 0 до 11 */	
    for (let i = 0; i < value.length && i < numberLength; i++) {	
      switch (i) {	
        case 0:	
          /* в самом начале ставится префикс +7 ( */	
          result += prefixNumber(value[i]);	
          continue;	
        case 4:	
          /* добавляется после "+7 (" круглая скобка ")" */	
          result += ") ";	
          break;	
        case 7:	
          /* дефис после 7 символа */	
          result += "-";	
          break;	
        case 9:	
          /* еще дефис  */	
          result += "-";	
          break;	
        default:	
          break;	
      }	
      /* на каждом шаге цикла добавляется новая цифра к номеру */	
      result += value[i];	
    }	
    /* итог: номер в формате +7 (999) 123-45-67 */	
    input.value = result;	
  }	
})