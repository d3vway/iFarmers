window.fillCard = (arrData, cardTemplate) => {
    ({ CARDHEADER, CARDTITLE, CARDBODY, CARDTIME, DETAILURL, OBJECTID, OBJECTTYPE, KEYWORD } = arrData);
    cardTemplate = cardTemplate
        .replaceAll("CARDHEADER", CARDHEADER)
        .replaceAll("CARDTITLE", CARDTITLE)
        .replaceAll("CARDBODY", CARDBODY)
        .replaceAll("CARDTIME", CARDTIME)
        .replaceAll("DETAILURL", DETAILURL)
        .replaceAll("OBJECTID", OBJECTID)
        .replaceAll("OBJECTTYPE", OBJECTTYPE)
        .replaceAll("KEYWORD", KEYWORD);
    return cardTemplate;
}

window.capz = (s) => {
    return s[0].toUpperCase() + s.slice(1);
}