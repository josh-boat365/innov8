//number count for stats
const counters = document.querySelectorAll(".__counter");
const speed = 200; // The lower the slower
counters.forEach((counter) => {
    const updateCount = () => {
        const target = +counter.getAttribute("data-count");
        const count = +counter.textContent;

        // Lower inc to slow and higher to slow
        const inc = target / speed;

        // console.log(inc);
        // console.log(count);

        // Check if target is reached
        if (count < target) {
            // Add inc to count and output in counter
            counter.textContent = count + inc;
            // Call function every ms
            setTimeout(updateCount, 1);
        } else {
            counter.textContent = target;
        }
    };
    updateCount();
});

//mentor section - card container
//data
const MentorInfo = [
    {
        id: 1,
        img: "../imgs/mentors/mentor1.jpg",
        name: "Joshua Nyarko Boateng",
        title: "Software Engineer/Machine Learning Engineer",
        skills: "React/Javascript/Php/Laravel/Python/Flask/Tensorflow/MySQL",
        bio: "Lorem ipsum dolor sit amet consectetur adipisicing elit Consectetur, autem fuga aperiam quibusdam nemo eum amet explicabo delectus accusantium adipisci!",
    },
    {
        id: 2,
        img: "../imgs/mentors/mentor2.jpg",
        name: "Atia Mathew",
        title: "UI/UX Engineer",
        skills: "Figma/Adobe Xd/ Photoshop/Html/Css/Javascript/Php",
        bio: "Lorem ipsum dolor sit amet consectetur adipisicing elit Consectetur, autem fuga ",
    },
    {
        id: 3,
        img: "../imgs/mentors/mentor3.jpg",
        name: "Fuad Muhammed",
        title: "Full Stack Software Engineer",
        skills: "Laravel/Php/Flutter/Java/Html/Css/Javascript/MySQL",
        bio: "Lorem ipsum dolor sit amet consectetur adipisicing elit Consectetur",
    },
    {
        id: 4,
        img: "../imgs/mentors/mentor4.jpg",
        name: "Emmanuel Larbi",
        title: "Software Engineer",
        skills: "Bootstrap/Php/Laravel/Python/Flask/MySQL",
        bio: "Lorem ipsum dolor sit amet consectetur adipisicing elit Consectetur, autem fuga aperiam quibusdam nemo eum amet explicabo delectus accusantium adipisci!",
    },
];

//getting values from html
const mentorImg = document.getElementById("mentorImg");
const mentorName = document.getElementById("mentorName");
const mentorRole = document.getElementById("mentorRole");
const mentorSkills = document.getElementById("mentorSkills");
const mentorBio = document.getElementById("mentorBio");

//buttons
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const randBtn = document.getElementById("randBtn");

let countMentorId = 0;
//on window load
window.addEventListener("DOMContentLoaded", function () {
    displayMentorData();
});

function displayMentorData() {
    const mentorData = MentorInfo[countMentorId];
    mentorImg.src = mentorData.img;
    mentorName.textContent = mentorData.name;
    mentorRole.textContent = mentorData.title;
    mentorSkills.textContent = mentorData.skills;
    mentorBio.textContent = mentorData.bio;
}

nextBtn.addEventListener("click", function () {
    countMentorId++;
    if (countMentorId > MentorInfo.length - 1) {
        countMentorId = 0;
    }
    displayMentorData();
});
prevBtn.addEventListener("click", function () {
    countMentorId--;
    if (countMentorId < 0) {
        countMentorId = MentorInfo.length - 1;
    }
    displayMentorData();
});

//displaying Random Mentors
randBtn.addEventListener("click", function () {
    let randomDisplay = Math.floor(Math.random() * MentorInfo.length);
    countMentorId = randomDisplay;
});
