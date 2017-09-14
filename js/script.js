

const greenHist = "The modern green movement started in Canada and around the world in the 1960s when the counter-culture movement launched the first mass rejection of consumer culture.Five decades later, the 60s values of peace, love and understanding have become the founding Green Party values of non-violence, social justice and ecological thinking.";

const conservHist= "On October 16th, 2003, the leaders of the Canadian Reform Conservative Alliance and the Progressive Conservative Party of Canada announced an agreement-in-principle to unite under a new political banner.  In December 2003, the merger was overwhelmingly ratified by members of both parties and the Conservative Party of Canada was officially born.  This unification of Canada’s conservative parties restored and rejuvenated the national political movement that has been building a stronger, safer, and better Canada for almost 150 years.";

const npdHist = "The New Democratic Party (NDP) was founded in Ottawa in 1961 by Tommy Douglas  at a convention uniting the Co-Operative Commonwealth Federation(CCF) and affiliated unions of the Canadian Labour Congress (CLC) and also New Party clubs. A social democratic party, the NDP has formed the government in several provinces but never nationally. In 2011, it enjoyed an historic electoral breakthrough, becoming the official opposition in Parliament for the first time.";

const libHist = " Liberal Party of Canada, French Parti Libéral du Canada, centrist Canadian political party, one of the major parties in the country since the establishment of the Dominion of Canada in 1867. The Liberal Party has been the governing party at the federal level for most of the period since the late 1890s, bringing together pragmatic social policy reformers and advocates of free enterprise, the balance between them shifting as leaders and context changed. The Liberal Party traditionally has been described as a “brokerage” party, in recognition of its success in appealing to a range of interests divided by region, language, ethnicity, and social class.";



function partyObject(hist, lead, polic, pos){
    this.history = hist;
    this.leader = lead;
    this.policy = polic;
    this.position = pos;
}


var greenParty = new partyObject(greenHist, "Elizabeth May", )

