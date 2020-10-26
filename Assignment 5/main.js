$(function () {
  $("#datepicker").datepicker({
    onSelect: function (date) {
      var day = date.substr(3, 2);

      if (day == 24) {
        document.getElementById("heading-1").innerHTML =
          "69,239 Covid Cases In India In 24 hours, Over 30 Lakh Total Cases";
        document.getElementById("content-1").innerHTML =
          "India recorded single-day jump of 69,239 coronavirus cases in the last 24 hours, taking the tally to 30,44,940 cases, the Union Health Ministry said this morning. About 22,80,566 lakh people have recovered. 56,706 Covid-linked deaths have been registered so far; 912 patients have died since yesterday, according to the official data. The recovery rate stood at 74.89 per cent this morning. India is behind Brazil and the US in the number of cases in the world.";
        document.getElementById("img-1").src = "./news3.jpg";

        document.getElementById("heading-2").innerHTML =
          "Residents Moved Out After Gurgaon Building Tilts Due To Heavy Rain";
        document.getElementById("content-2").innerHTML =
          "The residents of a four-storey house in Gurgaon have been moved out after the building tilted following heavy rain. The building in Sector 46 has been vacated, the police told news agency ANI. Gurgaon near Delhi, the Millennium City with multiple malls, high-rises and offices of multinational companies, has been severely challenged in two days of heavy downpour. The area where the building is located was severely flooded after yesterday's downpour, according to the police.  Haryana: Police vacated a four-storey building in Gurugram's Sector-46 after it bent on one side, following heavy downpour in the region.";
        document.getElementById("img-2").src = "./news4.jpg";
      } else if (day == 25) {
        document.getElementById("heading-1").innerHTML =
          "Eight assembly seats vacant in Uttar Pradesh, EC to decide on bypolls";
        document.getElementById("content-1").innerHTML =
          "Uttar Pradesh may witness a mini-assembly election of sorts in the coming months if the Election Commission (EC) decides to hold bypolls to eight vacant seats in the state assembly along with the Bihar elections. Five of these eight seats fell vacant after the death of sitting members. “The Election Commission of India has to take a call about holding by-polls to the eight assembly seats. As of now, we have no information about the possible timing of the bypolls,” said a senior officer. A bypoll to a vacant seat in the state assembly is generally held within six months from the date of vacancy. However, EC has not yet given any indication about holding these bypolls. “For seats, where the six-month time period is complete, EC has given a certificate, saying a decision about holding the bypoll there will be taken later,” said the officer.";
        document.getElementById("img-1").src = "./news1.jpg";

        document.getElementById("heading-2").innerHTML =
          "WHO’s global COVAX plan: All you need to know about Covid-19 vaccine access plan";
        document.getElementById("content-2").innerHTML =
          "The World Health Organization (WHO) on Monday said some 172 countries are engaging with the COVAX facility designed to ensure equitable access to Covid-19 vaccines, but more funding is needed and countries need to make binding commitments. The WHO had earlier urged countries to join a global pact aimed at ensuring less wealthy countries have access to Covid-19 vaccines, warning about the risks from so-called ‘vaccine nationalism.’ WHO director general Tedros Adhanom Ghebreyesus has said initially, when there will be limited supply of Covid-19 vaccines, it’s important to provide the vaccine to those at highest risk around the globe. He said this included health workers on the front lines of the pandemic, who were “critical to saving lives and stabilising the overall health system”.";
        document.getElementById("img-2").src = "./news2.jpg";
      } else {
        alert("Select a valid date");
      }
    },
  });
});

function changeLeft() {
  if (document.getElementById("ad-left").src.includes("ad1")) {
    document.getElementById("ad-left").src = "./ad2.gif";
  } else {
    document.getElementById("ad-left").src = "./ad1.gif";
  }
}

function changeRight() {
  if (document.getElementById("ad-right").src.includes("ad3")) {
    document.getElementById("ad-right").src = "./ad4.gif";
  } else {
    document.getElementById("ad-right").src = "./ad3.png";
  }
}
