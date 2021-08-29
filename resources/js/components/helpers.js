window.fillCard = (arrData, cardTemplate) => {
    ({ CARDHEADER, CARDTITLE, CARDBODY, CARDTIME } = arrData);
    cardTemplate = cardTemplate
        .replace("CARDHEADER", CARDHEADER)
        .replace("CARDTITLE", CARDTITLE)
        .replace("CARDBODY", CARDBODY)
        .replace("CARDTIME", CARDTIME);

    return cardTemplate;
}