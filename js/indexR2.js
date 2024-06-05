// ROBOT VOICE START

const texts = document.querySelector('.texts');
var c = 0;
var c1 = 0;
var k = 0, l = 0, n = 0, m = 0, i = 0, j = 0;

window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const recognition = new window.SpeechRecognition();

recognition.interimResults = true;

let p = document.createElement('p');

recognition.addEventListener('result', (e) => {

    const text = Array.from(e.results)
        .map(result => result[0])
        .map(result => result.transcript)
        .join('');

    p.innerText = text;
    texts.appendChild(p);



    if (text.includes('hello robot') || text.includes('Hello Robot')) {
        if (c == 0) {
            var audio = new Audio("AllAudiofile/hlw.mp3");
            audio.play();
            c++;
            c1 = 0;
            k = 0;
            l = 0;
            m = 0;
            n = 0;
            j = 0;
        }
    }

    if (text.includes('robot go to your page') || text.includes('go to your page')) {
        window.location.href = 'robotExtra.php'
    }

    if (text.includes('go to kids book')||text.includes('go to kid book')) {
        window.location.href = 'allKidsBook2.php'
    }

    if (text.includes('go to tuition page')|| text.includes('go to tuition book')|| text.includes('go to tuition')) {
        window.location.href = 'tuition.php'
    }

    if (text.includes('go to book shop')|| text.includes('go to book shop page')) {
        window.location.href = 'bookShop.php'
    }

    if (text.includes('go to student loan') ||  text.includes('go to student loan page') || text.includes('go to student fund')) {
        window.location.href = 'studentLoan.php'
    }

    if (text.includes('go to study abroad') || text.includes('go to study about') || text.includes('go to higher study')) {
        window.location.href = 'studyAbroad.php'
    }

    if (text.includes('go to ABC book')||text.includes('go to abc book')||text.includes('go to ABCD book') ||text.includes('go to abcd book')) {
        window.location.href = 'abcd2.php'
    }

    if (text.includes('go to 123 book')|| text.includes('go to want to book')) {
        window.location.href = 'oneTwo2.php'
    }

    if (text.includes('go to Bird book')|| text.includes('go to bird book')|| text.includes('go to birds book') || text.includes('go to Birds book')) {
        window.location.href = 'birds2.php'
    }

    if (text.includes('go to animal book')|| text.includes('go to Animal book')||text.includes('go to animals book')|| text.includes('go to Animals book')) {
        window.location.href = 'animals2.php'
    }

    if (text.includes('go to fruit book')|| text.includes('go to Fruit book')||text.includes('go to fruits book') || text.includes('go to Fruits book')) {
        window.location.href = 'Fruits2.php'
    }

    if (text.includes('go to home') || text.includes('go to Home')|| text.includes('go to your home')|| text.includes('go to your home page')|| text.includes('go to home page')) {
        window.location.href = 'index2.php'
    }

    if (text.includes('go to game') || text.includes('go to Game') || text.includes('go to Kids Game')
        || text.includes('go to kids game')) {
        window.location.href = 'kidsGame2.php'
    }

    if (text.includes('go to snake game') || text.includes('go to Snake game')) {
        window.location.href = 'snake2.php'
    }

    if (text.includes('go to math game') || text.includes('go to Math Game')) {
        window.location.href = 'mathGame2.php'
    }

    if (text.includes('who are you') || text.includes('hu r u')) {
        if (j == 0) {
            var audio1 = new Audio("AllAudiofile/robot1.mp3");
            audio1.play();
            j++;
            c = 0;
            c1 = 0;
            i = 0;
            l = 0;
            m = 0;
            n = 0;
            k = 0;
        }

    }
    
    if (text.includes('go back')) {
        window.location.href = 'index2.php'
    }

    if (text.includes('Thank you so much') || text.includes('thank you so much')|| text.includes('ok thank you so much')) {
        if (c1 == 0) {
            var audio1 = new Audio("AllAudiofile/myPleasure.mp3");
            audio1.play();
            c1++; 
            c=0;
            k=0;
            m=0;
            n=0;
            l=0;
            i=0;
            j=0;
        
        }


    }

    if (text.includes('logout please')) {
        window.location.href = 'logout.php'
    }

    if (text.includes('about uiu') || text.includes('about united') ||
        text.includes('about united university') || text.includes('about United university') || text.includes('about United International University')) {
        if (c1 == 0) {
            var audio1 = new Audio("AllAudiofile/uiu.mp3");
            audio1.play();
            c1++; //multiple time bajar karone c++ kora hoise
            c = 0;
            k = 0;
            m = 0;
            n = 0;
            l = 0;
            i = 0;
            j = 0;

        }
    }

    if (text.includes('go to uiu') || text.includes('go to united') ||
        text.includes('go to united university') || text.includes('go to united university website')) {
        window.location.href = 'https://www.uiu.ac.bd/'
    }

    if (text.includes('go to Facebook') || text.includes('go to facebook')) {
        window.location.href = 'https://www.facebook.com/'
    }

    if (text.includes('go to YouTube') || text.includes('go to Youtube') || text.includes('go to youtube')) {
        window.location.href = 'https://www.youtube.com/'
    }

    if (text.includes('go to Twitter') || text.includes('go to twitter')) {
        window.location.href = 'https://twitter.com/'
    }

    if (text.includes('go to Instagram') || text.includes('go to instagram')) {
        window.location.href = 'https://www.instagram.com/'
    }

    if (text.includes('go to LinkedIn') || text.includes('go to linkedIn')) {
        window.location.href = 'https://www.linkedin.com/'
    }

    if (text.includes('go to Google') || text.includes('go to google')) {
        window.location.href = 'https://www.google.com/'
    }


    console.log(text);
})

recognition.addEventListener('end', () => {
    recognition.start();
})


recognition.start();

// ROBOT VOICE END

