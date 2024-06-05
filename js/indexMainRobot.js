const texts = document.querySelector('.texts');
const mouth = document.getElementById('mouth');
var c = 0;
var c1 = 0,c2=0,c3=0,c4=0, c5=0,c6 = 0,c7 = 0, c8=0;c10=0,c11=0,c12=0,c13=0,c14=0
,c15=0,c16=0,c17=0,c18=0,c19=0,c20=0;;
var k =0, l =0,n=0, m=0,i =0 ,j=0;

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

            // tell mee part start

            if (text.includes('hello robot') || text.includes('Hello robot') || text.includes('Hello Robot')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'Hi how can i help today?';
                texts.appendChild(p);
                if (c == 0) {
                    var audio = new Audio("AllAudiofile/hlw.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                    c++;
                    c1=0;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                    c2=0;
                    c4=0;
                    c3=0;
                    c5=0;
                      c6=0;c7=0;        c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                }  
            }

            if (text.includes('tell me about uiu')|| text.includes('tell me about United International University')|| text.includes('tell me about united international university') ) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'Ok..United International University is a private university in Dhaka, Bangladesh. The government of Bangladesh approved the establishment of United International University in 2003. The university is owned by United Group. ';
                texts.appendChild(p);

                if (c2 == 0) {
                    var audio = new Audio("AllAudiofile/uni.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                    c2++;
                    c=0;
                    c1=0;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                    c4=0;
                    c3=0;
                    c5=0;
                      c6=0;c7=0;        c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }

            if (text.includes('tell me about Bangladesh')|| text.includes('tell me about bangladesh')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'ok..Bangladesh is a South Asian country. Dhaka the capital of Bangladesh. It area is 147,570 sq and population 160 million people. it is a beautiful country. Mother tongue is bengali. there are 98% people is muslim. Bangladesh is a riverine country. ';
                texts.appendChild(p);

                if (c3 == 0) {
                    var audio = new Audio("AllAudiofile/bd.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                    c3++;
                    c2=0;
                    c=0;
                    c1=0;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                    c4=0;
                    c5=0;
                      c6=0;c7=0;        c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }

            if (text.includes('how are you robot')|| text.includes('How are you robot')|| text.includes('How are you')|| text.includes('how are you')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'I am doing great, thanks for asking!.. How about you? How can I assist you today?';
                texts.appendChild(p);

                if (c4 == 0) {
                    var audio = new Audio("AllAudiofile/hru.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                      c4++;
                    c3=0;
                    c2=0;
                    c=0;
                    c1=0;
                    c5=0;
                    
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                      c6=0;c7=0;        c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }

            if (text.includes('Thank you so much') || text.includes('thank you so much')|| text.includes('ok thank you so much')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'My pleasure. Have a good day';
                texts.appendChild(p);

                if (c1 == 0) {
                    var audio = new Audio("AllAudiofile/myPleasure.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                      c1++;
                    c3=0;
                    c2=0;
                    c=0;
                    c4=0;
                    c5=0;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                      c6=0;c7=0;        c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }
            
              if (text.includes('who are you')||  text.includes('hu r u')||  text.includes('tell me about yourself')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'I am a web robot. Version 8.1, speed 1 (one) terabyte and my name is Messi';
                texts.appendChild(p);

                if (j == 0) {
                    var audio = new Audio("AllAudiofile/robot1.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                      j++; 
                    c3=0;
                    c2=0;
                    c=0;
                    c4=0;
                    c1=0;c5=0;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                      c6=0;c7=0;        c8=0;
                    c9=0;
                } 
            }

            if (text.includes('what is your name')||  text.includes('What is your name')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'My name is Messi';
                texts.appendChild(p);

                if (c5 == 0) {
                    var audio = new Audio("AllAudiofile/name.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                    c5++;
                    j=0; 
                    c3=0;
                    c2=0;
                    c=0;
                    c1=0;
                    c4=0;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                      c6=0;c7=0;        c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }

            if (text.includes('tell me about USA')||  text.includes('tell me about United State of America') ||  text.includes('tell me about United States Of America')||  text.includes('tell me about America')||  text.includes('tell me about america')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'Ok...The USA is a country in North America with 50 states. It has a rich history, diverse culture, and strong emphasis on education, top universities and technology. Career opportunities are vast, and future living promises innovation and progress.';
                texts.appendChild(p);

                if (c7 == 0) {
                    var audio = new Audio("AllAudiofile/usa.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                      c7++;
                    c5=0;
                    c6=0;
                    j=0; 
                    c3=0;
                    c2=0;
                    c=0;
                    c1=0;
                    c4=0;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                    c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }
            
            if (text.includes('tell me about MIT')||  text.includes('tell me about mit') ||  text.includes('tell me about Massachusetts Institute of Technology')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'Ok...MIT, founded in 1861 in Cambridge, Massachusetts, thrives in the heart of the vibrant academic community near Boston. It stands as a beacon of innovation and excellence globally. MIT seeks applicants with a competitive GPA, typically above 4.0, reflecting its rigorous academic standards. Offering a plethora of courses in science, engineering, and technology, MIT ensures accessibility through robust funding and scholarships. Renowned faculty drive cutting-edge research, contributing to MIT consistent top-ranking status worldwide. Its history is rich with transformative achievements, solidifying its reputation as a trailblazer in academia and industry. Overall, MIT location fosters a dynamic learning environment, while its commitment to excellence in education and research continues to shape the future.';
                texts.appendChild(p);

                if (c6 == 0) {
                    var audio = new Audio("AllAudiofile/mit.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                    c5=0;
                    c7=0;
                    j=0; 
                    c3=0;
                    c2=0;
                    c=0;
                    c1=0;
                    c4=0;
                    c6++;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;c7=0;        c8=0;
                    c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }
           
            if (text.includes('tell me about Raunak Azam')||  text.includes('tell me about Renuka song') ||  text.includes('tell me about Raunak Kadam')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = ' ';
                texts.appendChild(p);

                if (c8 == 0) {
                    var audio = new Audio("AllAudiofile/bk.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                      c8++;
                    c5=0;
                    c7=0;
                    j=0; 
                    c3=0;
                    c2=0;
                    c=0;
                    c1=0;
                    c4=0;
                    c6++;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                    c9=0;c10=0;
                } 
            }

            if (text.includes('Amit Shah') || text.includes('about the Tahmid sir') ||
              text.includes('about the Amit Shah') || text.includes('about Tahmid sir') ||
              text.includes('about Tahmid sir') || text.includes('about tahmid Sir')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'Ok...';
                texts.appendChild(p);
                if (c9 == 0) {
                var audio = new Audio("AllAudiofile/thmakSir.mp3");
                audio.play();
                audio.addEventListener('play', () => {
                    mouth.style.animationPlayState = 'running';
                  });

                  audio.addEventListener('ended', () => {
                    mouth.style.animationPlayState = 'paused';
                  });
              
                c9++;
                c5=0;
                c7=0;
                j=0; 
                c3=0;
                c2=0;
                c=0;
                c1=0;
                c4=0;
                c6++;
                k=0;
                l=0;
                m=0;
                n=0;
                j=0;
                c8=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
    
            }
            }
            
            if (text.includes('tell me about Prime Minister Sheikh Hasina')||  text.includes('tell me about Prime minister sheikh hasina') ||  text.includes('Prime Minister Sheikh Hasina')) {
                p = document.createElement('p');
                p.classList.add('replay');
                p.innerText = 'ok...!!!Sheikh Hasina is the Prime Minister of Bangladesh, assuming office in January 2009 and previously serving from 1996 to 2001. She hails from a prominent political family, being the daughter of Sheikh Mujibur Rahman, Bangladeshs founding father. Leading the Awami League, she has been a dominant figure in the countrys political arena, shaping its course significantly. Throughout her tenure, she has prioritized economic progress, educational reform, and initiatives for womens empowerment. Under her leadership, Bangladesh has witnessed notable strides in economic growth and infrastructural development, solidifying her position as a key figure in the nations governance.';
                texts.appendChild(p);

                if (c10 == 0) {
                    var audio = new Audio("AllAudiofile/hasina.mp3");
                    audio.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                      c10++;
                    c5=0;
                    c7=0;
                    j=0; 
                    c3=0;
                    c2=0;
                    c=0;
                    c1=0;
                    c4=0;
                    c6++;
                    k=0;
                    l=0;
                    m=0;
                    n=0;
                    j=0;
                    c8=0;
                    c9=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
                } 
            }

            if (text.includes('tell me about the vc of United International University') ||  text.includes('tell me about vice chancellor of United International University') ||  text.includes('tell me about vice chancellor of united international university')||  text.includes('tell me about vice chancellor of UIU') ||  text.includes('tell me about the vice chancellor of United International University')) {
              p = document.createElement('p');
              p.classList.add('replay');
              p.innerText = 'ok...!!!The name of vice chancellor of UIU Professor Dr Md Abul Kashem Mia. Professor Dr Md Abul Kashem Mia is a distinguished academic and the Vice Chancellor of United International University (UIU) in Bangladesh. He has an extensive background in education and research, with numerous publications in reputed journals. Dr Md Abul Kashem Miahas contributed significantly to the fields of engineering and technology. He completed his BSc Engg from  BUET. M.S Tohoku University from Japan and  Ph.D, Tohoku University from Japan. He is looking so handsome.';
          
          
              texts.appendChild(p);

              if (c11 == 0) {
                  var audio = new Audio("AllAudiofile/vc.mp3");
                  audio.play();
                  audio.addEventListener('play', () => {
                      mouth.style.animationPlayState = 'running';
                    });

                    audio.addEventListener('ended', () => {
                      mouth.style.animationPlayState = 'paused';
                    });
                    c11++;
                  c5=0;
                  c7=0;
                  j=0; 
                  c3=0;
                  c2=0;
                  c=0;
                  c1=0;
                  c4=0;
                  c6++;
                  k=0;
                  l=0;
                  m=0;
                  n=0;
                  j=0;
                  c8=0;
                  c9=0;c10=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
              } 
            }

            
            if (text.includes('tell me about this website') ||  text.includes('tell me About This Website')) {
              p = document.createElement('p');
              p.classList.add('replay');
              p.innerText = 'ok. This website name is education world. This website aims to create a comprehensive study-related website that caters to all age groups, from children to university students. The website is designed to be a versatile platform offering a wide range of educational resources, interactive activities, and essential services for students. It also features a web robot that allows users to navigate and utilize the website through voice commands. Books for Kids: A wide selection of childrens books available for reading online. Games: Educational games designed to make learning fun and engaging for kids. Book-Shop : Users can browse and purchase books directly from the website. The bookstore features a variety of books suitable for different age groups and educational needs. Tuition-Platform : Users can search for tuition services tailored to their specific educational needs. The search feature helps students find tutors and tuition centers easily. Student-Loan : The website offers a section where students can apply for educational loans. This feature aims to support students financially, making higher education more accessible. Study-Abroad : A comprehensive database providing detailed information on higher education opportunities, including universities, courses, scholarships, and admission requirements.';
          
          
              texts.appendChild(p);

              if (c12 == 0) {
                  var audio = new Audio("AllAudiofile/wt.mp3");
                  audio.play();
                  audio.addEventListener('play', () => {
                      mouth.style.animationPlayState = 'running';
                    });

                    audio.addEventListener('ended', () => {
                      mouth.style.animationPlayState = 'paused';
                    });
                    c12++;
                  c5=0;
                  c7=0;
                  j=0; 
                  c3=0;
                  c2=0;
                  c=0;
                  c1=0;
                  c4=0;
                  c6++;
                  k=0;
                  l=0;
                  m=0;
                  n=0;
                  j=0;
                  c8=0;
                  c9=0;c10=0;c11=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
              } 
            }

            if (text.includes('tell me about Australia') ||  text.includes('tell me about australia')) {
              p = document.createElement('p');
              p.classList.add('replay');
              p.innerText = 'ok....Australia, the worlds sixth-largest country, is known for its diverse landscapes including beaches, deserts, and rainforests. Canberra The capital of Australia. It has a population of about 26 million, with Sydney and Melbourne being its largest cities. The country is rich in unique wildlife, such as kangaroos and koalas. It has a strong economy, largely driven by mining, agriculture, and tourism. Australia is also renowned for its indigenous culture and vibrant arts scene.';
          
          
              texts.appendChild(p);

              if (c13 == 0) {
                  var audio = new Audio("AllAudiofile/aus.mp3");
                  audio.play();
                  audio.addEventListener('play', () => {
                      mouth.style.animationPlayState = 'running';
                    });

                    audio.addEventListener('ended', () => {
                      mouth.style.animationPlayState = 'paused';
                    });
                    c13++;
                  c5=0;
                  c7=0;
                  j=0; 
                  c3=0;
                  c2=0;
                  c=0;
                  c1=0;
                  c4=0;
                  c6++;
                  k=0;
                  l=0;
                  m=0;
                  n=0;
                  j=0;
                  c8=0;
                  c9=0;c10=0;c11=0;c12=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
              } 
            }

            if (text.includes('tell me about Ashapur Rahman Australia') ||  text.includes('tell me about Ashrafur Rahman Australia')) {
              p = document.createElement('p');
              p.classList.add('replay');
              p.innerText = 'Here is the corrected version of the text:Ashrafur Rahman is a businessman in Australia. Currently, he is an Australian citizen. He was born in 1976 in B-Baria. He completed his SSC from Chinair Anjuman Ara High School. He completed his HSC from B-Baria Government College. He earned his BSc from Calcutta University and his masters from Central Queensland University. His fathers name is Md. Fozlur Rahman (Freedom Fighter), and his mothers name is Moriyom Begam. He is a married man. His wifes name is Yeasmin Akther. He has two sons. His elder sons name is Hafiz, and his younger sons name is Yasfi. He is a very polite and honest person.';
          
          
              texts.appendChild(p);

              if (c13 == 0) {
                  var audio = new Audio("AllAudiofile/ashrf.mp3");
                  audio.play();
                  audio.addEventListener('play', () => {
                      mouth.style.animationPlayState = 'running';
                    });

                    audio.addEventListener('ended', () => {
                      mouth.style.animationPlayState = 'paused';
                    });
                    c13++;
                  c5=0;
                  c7=0;
                  j=0; 
                  c3=0;
                  c2=0;
                  c=0;
                  c1=0;
                  c4=0;
                  c6++;
                  k=0;
                  l=0;
                  m=0;
                  n=0;
                  j=0;
                  c8=0;
                  c9=0;c10=0;c11=0;c12=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
              } 
            }

            if (text.includes('I am fine') ||  text.includes('I am good')) {
              p = document.createElement('p');
              p.classList.add('replay');
              p.innerText = 'Okay...great, how can I assist you today?  ';
          
          
              texts.appendChild(p);

              if (c14 == 0) {
                  var audio = new Audio("AllAudiofile/okAs.mp3");
                  audio.play();
                  audio.addEventListener('play', () => {
                      mouth.style.animationPlayState = 'running';
                    });

                    audio.addEventListener('ended', () => {
                      mouth.style.animationPlayState = 'paused';
                    });
                    c14++;
                  c5=0;
                  c7=0;
                  j=0; 
                  c3=0;
                  c2=0;
                  c=0;
                  c1=0;
                  c4=0;
                  c6++;
                  k=0;
                  l=0;
                  m=0;
                  n=0;
                  j=0;
                  c8=0;
                  c9=0;c10=0;c11=0;c12=0;c13=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;
              } 
            }

            if (text.includes('tell me about faculty member of United International University') ||  text.includes('faculty member of United International University')||text.includes('tell me about faculty member of united international university') ) {
              p = document.createElement('p');
              p.classList.add('replay');
              p.innerText = 'ok..United International University faculty members are known for their unwavering dedication and hard work. Their friendly and approachable nature makes them well-liked by everyone. They always go out of their way to help others in need. Their innovative ideas and solutions have contributed significantly to the success of their projects. They are reliable and trustworthy individuals who consistently set a positive example for others. United International University faculty members are handsome, and the female faculty are so beautiful.  ';
          
          
              texts.appendChild(p);

              if (c15 == 0) {
                  var audio = new Audio("AllAudiofile/faculty.mp3");
                  audio.play();
                  audio.addEventListener('play', () => {
                      mouth.style.animationPlayState = 'running';
                    });

                    audio.addEventListener('ended', () => {
                      mouth.style.animationPlayState = 'paused';
                    });
                    c15++;
                  c5=0;
                  c7=0;
                  j=0; 
                  c3=0;
                  c2=0;
                  c=0;
                  c1=0;
                  c4=0;
                  c6++;
                  k=0;
                  l=0;
                  m=0;
                  n=0;
                  j=0;
                  c8=0;
                  c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c16=0;c17=0;c18=0;c19=0;c20=0;
              } 
            }

            if (text.includes('tell me about Oxford University') ||  text.includes('tell me about oxford university')||text.includes('tell me about University of Oxford') ) {
              p = document.createElement('p');
              p.classList.add('replay');
              p.innerText = 'ok..The University of Oxford, located in Oxford, England, is one of the worlds oldest and most prestigious universities, with roots dating back to the 12th century. It is renowned for its rigorous academic standards, outstanding research, and distinguished faculty. Oxford comprises 38 independent colleges and numerous departments, offering a wide range of undergraduate and postgraduate programs. The university is known for its tutorial-based teaching system, providing personalized education. Oxford has produced many notable alumni, including 28 British Prime Ministers, numerous international leaders, Nobel laureates, and influential scholars. Its libraries and museums, such as the Bodleian Library and the Ashmolean Museum, are world-famous. Additionally, Oxford is a member of the Russell Group, which represents 24 leading public research universities in the UK.';
          
          
              texts.appendChild(p);

              if (c16 == 0) {
                  var audio = new Audio("AllAudiofile/ox.mp3");
                  audio.play();
                  audio.addEventListener('play', () => {
                      mouth.style.animationPlayState = 'running';
                    });

                    audio.addEventListener('ended', () => {
                      mouth.style.animationPlayState = 'paused';
                    });
                    c16++;
                  c5=0;
                  c7=0;
                  j=0; 
                  c3=0;
                  c2=0;
                  c=0;
                  c1=0;
                  c4=0;
                  c6++;
                  k=0;
                  l=0;
                  m=0;
                  n=0;
                  j=0;
                  c8=0;
                  c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c17=0;c18=0;c19=0;c20=0;
              } 
            }


            // tell mee part end


            if (text.includes('go to home') || text.includes('go to Home')|| text.includes('go to your home')|| text.includes('go to your home page')|| text.includes('go to home page')) {
                window.location.href = 'index1.php'
            }
                    
            if (text.includes('go to kids book')||text.includes('go to kid book')) {
                window.location.href = 'allKidsBook.php'
            }

            if (text.includes('go to admin page')||text.includes('go to Admin page')) {
                window.location.href = 'adminLogin.php'
            }

            if (text.includes('go to contact page')||text.includes('go to Contact page')) {
                window.location.href = 'contact.php'
            }

            if (text.includes('robot go to your page') || text.includes('go to your page')) {
                window.location.href = 'robotExtra.php'
            }
          
            if (text.includes('go to game') || text.includes('go to Game') || text.includes('go to kids game') ) {
                window.location.href = 'kidsGame.php'
            }

            if (text.includes('go to snake game') || text.includes('go to Snake game') ) {
                window.location.href = 'snake.php'
            }

            if (text.includes('go to math game') || text.includes('go to Math game') ) {
                window.location.href = 'mathGame.php'
            }

            if (text.includes('go to tuition page') || text.includes('go to tuition')|| text.includes('go to tuition book')) {
            
              
              if (k == 0) {
                    var audio1 = new Audio("AllAudiofile/sr.mp3");
                    audio1.play();
                    audio.addEventListener('play', () => {
                        mouth.style.animationPlayState = 'running';
                      });

                      audio.addEventListener('ended', () => {
                        mouth.style.animationPlayState = 'paused';
                      });
                    k++;
                    j=0;
                    c = 0;
                    c1 =0;
                    i=0;
                    l=0;
                    m=0;
                    n=0;
                  c2 =0;
                    
                }


            }

            if (text.includes('go to book shop')  || text.includes('go to book shop page')) {
                if (m == 0) {
                    var audio1 = new Audio("AllAudiofile/sr.mp3");
                    audio1.play();
                      audio.addEventListener('play', () => {
                                mouth.style.animationPlayState = 'running';
                              });

                              audio.addEventListener('ended', () => {
                                mouth.style.animationPlayState = 'paused';
                              });
                    m++;
                    j=0;
                    c = 0;
                    c1 =0;
                    i=0;
                    l=0;
                    n=0;
                    k==0;
                    c2 =0;
                }


            }

            if (text.includes('go to student loan') || text.includes('go to student loan page') || text.includes('go to student fund')) {
                if (n == 0) {
                    var audio1 = new Audio("AllAudiofile/sr.mp3");
                    audio1.play();
                      audio.addEventListener('play', () => {
                                mouth.style.animationPlayState = 'running';
                              });

                              audio.addEventListener('ended', () => {
                                mouth.style.animationPlayState = 'paused';
                              });
                    n++;
                    m=0;
                    j=0;
                    c = 0;
                    c1 =0;
                    i=0;
                    l=0;
                    k==0;
                    c2 =0;
                }


            }

            if (text.includes('go to study abroad') || text.includes('go to study about') || text.includes('go to study abroad page') || text.includes('go to higher study')) {
                if (l == 0) {
                    var audio1 = new Audio("AllAudiofile/sr.mp3");
                    audio1.play();
                      audio.addEventListener('play', () => {
                                mouth.style.animationPlayState = 'running';
                              });

                              audio.addEventListener('ended', () => {
                                mouth.style.animationPlayState = 'paused';
                              });
                    l++;
                    n=0;
                    m=0;
                    j=0;
                    c = 0;
                    c1 =0;
                    i=0;
                    k=0;
                    c2 =0;
                }


            }

            if (text.includes('go to login') || text.includes('go to Login')) {
                window.location.href = 'login.php'
            }

            if (text.includes('go to ABC book')||text.includes('go to ABCD book') ||text.includes('go to abcd book')  ||text.includes('go to abc book')  ) {
                window.location.href = 'abcd.php'
            }

            if (text.includes('go to 123 book')|| text.includes('go to want to book')) {
                window.location.href = 'oneTwo.php'
            }

            if (text.includes('go to bird book') || text.includes('go to Bird book')) {
                window.location.href = 'birds.php'
            }

            if (text.includes('go to animal book') || text.includes('go to Animal book')) {
                window.location.href = 'animals.php'
            }

            if (text.includes('go to fruit book') || text.includes('go to Fruit book')) {
                window.location.href = 'Fruits.php'
            }

            if (text.includes('go back')) {
                window.location.href = 'index1.php'
            }

            if (text.includes('go to uiu')|| text.includes('go to united international university') || text.includes('go to United International University')) {
                window.location.href = 'https://www.uiu.ac.bd/'
            }

            if (text.includes('go to Facebook')||text.includes('go to facebook')) {
                window.location.href = 'https://www.facebook.com/'
            }

            if (text.includes('go to YouTube')|| text.includes('go to Youtube') || text.includes('go to youtube')) {
                window.location.href = 'https://www.youtube.com/'
            }

            if (text.includes('go to Twitter')||text.includes('go to twitter')) {
                window.location.href = 'https://twitter.com/'
            }

            if (text.includes('go to Instagram')||text.includes('go to instagram')) {
                window.location.href = 'https://www.instagram.com/'
            }

            if (text.includes('go to LinkedIn')||text.includes('go to linkedIn')) {
                window.location.href = 'https://www.linkedin.com/'
            }

            if (text.includes('go to Google')||text.includes('go to google')) {
                window.location.href = 'https://www.google.com/'
            }
            


            p = document.createElement('p');
        }

    console.log(text);
} )

recognition.addEventListener('end', () => {
    recognition.start();
})


recognition.start();