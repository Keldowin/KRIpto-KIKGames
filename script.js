var intro = [
  "KRIpto BOT, опробуй! <a class='adso' href='https://vk.com/kriptooff'>попробывать</a>",
  "Качай игры с высокой скоростью! ",
  "Дизайн этого сайта сделан из ОнлайнТГ",
  "Все игры MultiPlace",
  "Добавляем игры бесплатно, <a class='adso' href='help.php'>подробнее</a>",
  "Всё новые и новые игры!",
];

function getRandomNum(maxWord){
  return Math.floor(Math.random() * maxWord);
}
function generate(){
  var phrase = "";
  var introNum = getRandomNum(intro.length);
  phrase += intro[introNum] + " ";
  document.getElementById("hello_text").innerHTML = phrase;
}
setInterval(generate , 3500);
getRandomNum();
generate();
