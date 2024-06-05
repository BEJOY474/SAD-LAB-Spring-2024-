const texts = document.querySelector('.texts');

window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const recognition = new window.SpeechRecognition();

let p = document.createElement('p');

recognition.addEventListener('result', (e) => {
     const text = Array.from(e.results)
        .map(result => result[0])
        .map(result => result.transcript)
        .join('');

        p.innerText = text;
        texts.appendChild(p);

        if(e.results[0].isFinal){
            if (text.includes('hello')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'Hi';
                texts.appendChild(p);
            }

            if (text.includes('uiu')|| text.includes('United International University') ) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'United International University is a private university in Dhaka, Bangladesh. The government of Bangladesh approved the establishment of United International University in 2003. The university is owned by United Group. ';
                texts.appendChild(p);
            }

            if (text.includes('home') || text.includes('Home')) {
                window.location.href = 'index.php'
            }

            if (text.includes('robot go to your page') || text.includes('your page')) {
                window.location.href = 'robot.php'
            }



            p = document.createElement('p');
        }

    console.log(text);
} )

recognition.addEventListener('end', () => {
    recognition.start();
})


recognition.start();