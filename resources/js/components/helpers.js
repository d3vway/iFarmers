window.fillCard = (arrData, cardTemplate) => {
    ({ CARDHEADER, CARDTITLE, CARDBODY, CARDTIME, DETAILURL } = arrData);
    cardTemplate = cardTemplate
        .replace("CARDHEADER", CARDHEADER)
        .replace("CARDTITLE", CARDTITLE)
        .replace("CARDBODY", CARDBODY)
        .replace("CARDTIME", CARDTIME)
        .replace("DETAILURL", DETAILURL);
    return cardTemplate;
}

window.capz = (s) => {
    return s[0].toUpperCase() + s.slice(1);
}