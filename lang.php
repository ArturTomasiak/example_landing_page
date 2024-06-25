<?php
if (isset($_GET['lang']))
    $_SESSION['lang'] = $_GET['lang'];
if (!isset($_SESSION['lang']) || $_SESSION['lang'] == 'en') {
    $apply   = "Apply Now";

    $alt_logo = "University Logo";
    $alt_promotional_material_1 = "PJATK building in warsaw";
    $alt_promotional_material_2 = "PJATK photograph of a lecture";
    $alt_promotional_material_3 = "PJATK art classes";
    $alt_about_section_1 = "PJATK graduates tossing hats";
    $alt_about_section_2 = "PJATK art display";

    $about = "about";
    $introduction = "The Polish-Japanese Academy of Information Technology was established in 1994 on the basis of an agreement between the governments of the Republic of Poland and Japan. High quality education of specialists able to work creatively and with commitment in the practical areas of computer technology applications important for the development of Poland has been and remains a priority for the further development of the University.";
    $education_fields_into = "The university is authorized to educate in the fields of:";
    $education_fields = array("computer science", "information management", "graphic design and multimedia arts", "graphic design", "interior design", "cultural studies");
    $doctorate = "The Polish-Japanese Academy of Information Technology was granted the authority to confer doctoral and postdoctoral degrees in technical sciences in the discipline computer science, in 2002 and 2009, respectively, and to grant doctoral degrees in the discipline of mechanics in 2014. Also in 2017, Faculty of New Media Arts was granted the right to confer a doctoral degree in the field of fine arts and art conservation.";
    $foreigners = "There are many foreigners studying at the Polish-Japanese Academy of Information Technology. In 2022, according to data from the Student's Office, we had students from as many as 74 countries! We are happy that young people from all over the world choose to study in the middle of Europe, right at our University!";
    $extras = "We care about providing an enviroment that encourages development in both the field of choice and hobbies, thus we are happy to organize optional lectures, programs and events related to culture or chosen industries as well as we encourage all students to participate in or create student clubs.";
    $achievements = "achievements";
    $awards = array("2011. According to the Webometrics ranking, in terms of multimedia, the Polish-Japanese Institute of Information Technology is ahead of other non-public universities in the country. The ranking takes into account, among other things, online publications, databases, free access to resources, online activity of universities and researchers, positioning of university websites, etc. The ranking includes all world universities and has been prepared since 2004 by the Superior Council for Scientific Research in Madrid (CSIC).",
    "2018. The book '100 x Independence' by PJAIT Publishing House received an honorable mention in the 'Most Beautiful Books of the Year 2018' competition organized annually by the Polish Society of Book Publishers.",
    "2019. During the XI Student Graphics Biennial in Poznan, Ms. Agnieszka Warcaba won the Award of the Dean of the Faculty of Arts of the Maria Curie-Skłodowska University in Lublin. The award-winning work was created in the Workshop Graphics Studio of Prof. Andrzej Kalina as part of the New Techniques in Workshop Graphics course.",
    "2019. The BrainCode hackathon 'From offline to online' by Allegro was held on April 12-13. Four students and graduates of PJAIT took first place, developing a tool that allows you to create a regular subscription order.",
    "2020. Rafal Maslyk and Barbara Karpowicz, researchers and lecturers affiliated with the XR Lab and the Department of Multimedia PJAIT, presented their game 'Albert's Journey', which received recognition from the developers of the largest gaming platform Steam. Its demo version was included in the summer 2020 Steam Game Festival, which took place online from June 16 to 22.",
    "2020. In January, during a hackathon at the Google GDG DevFest conference in Lisbon, students PJAIT, Mr. Robert Grochowski and Mr. Maciej Lis won second place. They created an app that informs drivers of approaching ambulance, fire and police vehicles.");

    $reviews = "reviews";
    $reviews_array = array (
    array("Ivan Tsimchyshyn", "google reviews", "Finishing my 3rd year of NeMA studies. The academy provides a great level of hard skills and software knowledge, as well offers a loot of opportunities for soft skills growth. PJAIT encourages its students to collaborate and participate in international projects. If you are ready to work, to learn and have fun; this is for sure a place for you!"),
    array("NotAThrowaway2137", "reddit", "Pjatk is a solid choice, they're not a diploma mill. Good CS program, one of the best among private unis. Quite a few alumni go to do masters abroad."),
    array("J P", "google reviews", "So many people complain about this university, but they usually are lazy people who want everything easy. I was in PW before, and this university was the best thing that happened to me, it is tough but you can make it if you work very hard."),
    array("R R", "opinieouczelniach.pl", "I really enjoyed studying here. After getting a job as a java developer I can say that the curriculum gives a solid foundation for wok and teaches both technical skills like different programming languages but also soft skills like teamwork and time management. Overall, I would definetely recommend it"),
    array("Enkhajrgal Dovchin", "google reviews", "The school is definitely the best if we take into account learning computer science, graphics and everything related to broadly understood computer work. Of course, I am aware that not all lecturers can fully meet the requirements of this school, but the current creation is above-average and certainly worth the invested money. The school is full of the highest quality technology, which is confirmed by the ubiquitous Japanese equipment and the support of the Japanese embassy. I recommend it in Warsaw."),
    array("Aliona Khodakova", "facebook", "The best Academy to study IT and Graphic Design in Warsaw which gives you not only a diploma but A LOT of practical experience. Besides, has a very diverse program in subjects what helps you to become a good and broad professional")
    );

    $socials_and_contact = "socials & contact";
    $wwa = "warsaw";
    $gdansk = "gdansk";

    $send_a_message = "message us";
    $placeholder_name = "name";
    $placeholder_topic = "topic";
    $placeholder_content = "content";
    $send = "message";
    $msg_error = "error - exceeded the limit of messages one can send";
    $msg_success = "message sent successfully";

    $disclaimer = "unofficial PJATK landing page; this is a first year student project by Artur Tomasiak";

}
else if ($_SESSION['lang'] == 'pl') {
    $apply   = "Aplikuj Teraz";

    $alt_logo = "Logo Uniwersytetu";
    $alt_promotional_material_1 = "budynek PJATK w warszawie";
    $alt_promotional_material_2 = "PJATK zdjęcie wykładu";
    $alt_promotional_material_3 = "PJATK zdjęcie ćwiczeń z sztuki";
    $alt_about_section_1 = "PJATK rzucanie kapeluszami podczas ukończenia uniwersytetu";
    $alt_about_section_2 = "PJATK prezentacja sztuki";

    $about = "o nas";
    $introduction = "Polsko-Japońska Akademia Technik Komputerowych (wcześniej Polsko-Japońska Wyższa Szkoła Technik Komputerowych) powstała w 1994 roku na podstawie porozumienia zawartego między rządami Rzeczypospolitej Polskiej i Japonii. Wysoka jakość kształcenia specjalistów potrafiących twórczo i z zaangażowaniem pracować w ważnych dla rozwoju Polski praktycznych obszarach zastosowań technik komputerowych była i pozostaje priorytetem dalszego rozwoju Uczelni.";
    $education_fields_into = "Uczelnia posiada uprawnienia do kształcenia na kierunkach:";
    $education_fields = array("informatyka", "zarządzanie informacją", "projektowanie graficzne i sztuka multimediów", "grafika", "architektura wnętrz", "kulturoznawstwo");
    $doctorate = "Polsko-Japońska Akademia Technik Komputerowych otrzymała uprawnienia do nadawania stopnia naukowego doktora oraz doktora habilitowanego nauk technicznych w dyscyplinie informatyka, odpowiednio w 2002 i w 2009 roku, a w 2014 roku do doktoryzowania w dyscyplinie mechanika. W 2017 roku także Wydział Sztuki Nowych Mediów uzyskał prawo do nadawania stopnia doktora w dziedzinie sztuki plastyczne i konserwacja dzieł sztuki.";
    $foreigners = "W Polsko-Japońskiej Akademii Technik Komputerowych studiuje wielu obcokrajowców. W 2022 roku według danych z Dziekanatu mieliśmy studentów z aż 74 krajów! Cieszymy się, że młodzi ludzie z całego świata decydują się studiować w środku Europy, właśnie w naszej Uczelni! ";
    $extras = "Zależy nam na zapoewnieniu środowiska sprzyjającego rozwojowi zarówno w wybranej dziedzinie jak i w zainteresowaniach, dlatego chętnie organizujemy fakultatywne wykłady, programy oraz wydarzenia związane z kulturą lub wybranymi branżami, a także zachęcamy wszystkich studentów do udziału w klubach studenckich bądź w ich stworzeniu.";
    $achievements = "osiągnięcia";
    $awards = array("2011. Według rankingu Webometrics, pod względem multimediów, Polsko-Japońska Wyższa Szkoła Technik Komputerowych wyprzedza pozostałe niepubliczne uczelnie w kraju. W rankingu uwzględniane są m.in.: wydawnictwa internetowe, bazy danych, wolny dostęp do zasobów, aktywność uczelni i naukowców w sieci, pozycjonowanie stron internetowych uczelni, itp. Ranking obejmuje wszystkie uczelnie światowe i przygotowywany jest od 2004 roku przez Najwyższą Radę Badań Naukowych w Madrycie (CSIC).",
    "2018. Książka „100 x Independence” Wydawnictwa PJATK otrzymała wyróżnienie w konkursie „Najpiękniejsze książki Roku 2018” organizowanym corocznie przez Polskie Towarzystwo Wydawców Książek.",
    "2019. Podczas XI Biennale Grafiki Studenckiej w Poznaniu pani Agnieszka Warcaba zdobyła Nagrodę Dziekana Wydziału Artystycznego UMCS w Lublinie. Nagrodzona prace powstały w Pracowni Grafiki Warsztatowej prof. Andrzeja Kaliny w ramach przedmiotu Nowe Techniki w Grafice Warsztatowej.",
    "2019. W dniach 12-13 kwietnia odbył się hackathon BrainCode „From offline to online” firmy Allegro. Czwórka studentów i absolwentów PJATK zajęła I miejsce, opracowując narzędzie, które pozwala na stworzenie regularnego zamówienia subskrypcyjnego.",
    "2020. Rafał Masłyk i Barbara Karpowicz, badacze i wykładowcy związani z XR Lab i Katedrą Multimediów PJATK, zaprezentowali swoją grę 'Albert's Journey', która spotkała się z uznaniem twórców największej platformy gamingowej Steam. Jej wersja demo została włączona do letniego Steam Game Festival 2020, który odbył się online od 16 do 22 czerwca.",
    "2020. W styczniu podczas hackathonu na konferencji Google GDG DevFest w Lizbonie studenci PJATK, pan Robert Grochowski i pan Maciej Lis zdobyli II miejsce. Stworzyli aplikację, która informuje kierowców o zbliżających się pojazdach pogotowia ratunkowego, straży i policji.");
    
    $reviews = "opinie";
    $reviews_array = array (
    array("Enkhajrgal Dovchin", "google reviews", "Szkoła zdecydowanie najlepsza jeżeli bierzemy pod uwagę naukę informatyki, grafiki i wszystkiego co związane z szeroko pojętą pracą przy komputerze. Oczywiście jestem świadoma, że nie wszyscy wykładowcy mogą spełniać do końca wymogi tej szkoły ale ten twór co obecnie jest jest ponadprzeciętny i na pewno wart zainwestowanych pieniędzy. Szkoła pełna technologii najwyższej jakości co potwierdza wszechobecny japoński sprzęt i wsparcie ambasady Japonii. Polecam w Warszawie."),
    array("Adam", "uczelnie.pl", "Po maturze bardzo długo zastanawiałem się nad doborem odpowiedniej uczelni i trafiłem w dziesiątkę! Mógłbym się dużo wypowiadać na temat zalet PJATK, ale powiem krótko: Polecam wszystkim! Szkoła bardzo, bardzo dobrze przygotowuje studentów do pracy w zawodzie i daje niezliczone perspektywy rozwoju za pośrednictwem praktyk, kursów itd. Sam poziom nauczania jest bardzo wysoki, a nauczyciele to praktycy i pasjonaci - to na prawdę wiele znaczy."),
    array("Piotr Iskra", "facebook", "Bardzo dobra uczelnia która przygotowuje do zawodu z wykorzystaniem nowoczesnej technologii. To podstawa w dzisiejszych czasach. Polecam"),
    array("Michał", "opinieouczelniach.pl", "Jeśli ktoś chce się naprawdę nauczyć informatyki, to ta uczelnia będzie dobrym wyborem. Jest ciężko, ale warto."),
    array("Zuzia Palesa", "google reviews", "Dostałam się na zajęcia 'Illustration week', planuje odwiedzać to miejsce częściej, najlepiej w charakterze studiów, a nie sporadycznych wypadów. Atmosfera na uczelni jest niezwykle przyjazna, zarówno uczniowie jak pracownicy są mili i chętnie pomogą. Profesorzy dokładają wszelkich starań by pomóc studentom rozwinąć się jak najbardziej, umiejąc zachować przy tym umiejętność konstruktywnej krytyki. Zajęcia na które uczęszczałam odbywały się kompletnie w języku angielskim, dlatego trzeba się liczyć z tym że język ten jest tu wymagany. Dla mnie jednak to była fantastyczna przygoda oraz chce tam wrócić po więcej!"),
    array("Emilia", "uczelnie.pl", "Jestem na pierwszym roku studiów i chociaż jest naprawdę wymagająco, to równocześnie bardzo interesująco. Nie żałuję, że wybrałam tę szkołę. Jeśli rozważacie studia z grafiki, przygotujcie się na to, że czasu wolnego będzie niewiele. Mimo to, warto się starać. Na początku nie znałam żadnych programów graficznych, ale po pół roku widzę znaczący postęp, co jest bardzo satysfakcjonujące. Nauczyciele są zawsze gotowi do konsultacji i wsparcia, lecz wymaga to również dużego zaangażowania od studenta. Moim zdaniem, uczelnia jest swietna i nie wybrałabym innej.")
    );

    $socials_and_contact = "media & kontakt";
    $wwa = "warszawa";
    $gdansk = "gdańsk";

    $send_a_message = "napisz do nas";
    $placeholder_name = "nazwa";
    $placeholder_topic = "temat";
    $placeholder_content = "treść";
    $send = "wyślij";
    $msg_error = "error - przekroczono limit wysyłania wiadomości";
    $msg_success = "wiadomość została wysłana";

    $disclaimer = "nieoficjalna strona PJATK; to jest projekt pierwszoroczny; autor: Artur Tomasiak";
} 
?>