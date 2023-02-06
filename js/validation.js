function choosed() {
  var answer1 = document.getElementById("answer-1");
  var answer2 = document.getElementById("answer-2");
  var answer3 = document.getElementById("answer-3");
  var answer4 = document.getElementById("answer-4");
  var answer5 = document.getElementById("answer-5");
  var collector = document.getElementById("collector-questions");
  var camp = document.getElementById("camp-validate");
  var vali = 0;
  if (answer1 !== null) {
    if (answer1.checked) {
      console.log("True");
      collector.value = "answer-1";
      vali = 1;
    } else {
      collector.value = 0;
      if (answer2 !== null) {
        if (answer2.checked) {
          console.log("True");
          collector.value = "answer-2";
          vali = 1;
        } else {
          collector.value = 0;
          if (answer3 !== null) {
            if (answer3.checked) {
              console.log("True");
              collector.value = "answer-3";
              vali = 1;
            } else {
              collector.value = 0;
              if (answer4 !== null) {
                if (answer4.checked) {
                  console.log("True");
                  collector.value = "answer-4";
                  vali = 1;
                } else {
                  collector.value = 0;
                  if (answer5 !== null) {
                    if (answer5.checked) {
                      console.log("True");
                      collector.value = "answer-5";
                      vali = 1;
                    } else {
                      collector.value = 0;
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    console.log(collector.value);
    if (collector.value == 0) {
      camp.innerText = "Sie müssen eine Option wahlen";
      camp.style.color = "#d31e1e";
      camp.style.fontSize = "35px";
      camp.style.fontFamily = "Syne";
      camp.style.fontWeight = "700";
      camp.style.textShadow = "0px 2px 2px rgba(0, 0, 0, 0.25)";
      return false;
    }
  }
}
