var plants = [
    {
        'id':'06', 
        'created_at':'08/04/2023', 
        'updated_at':'08/04/2023', 
        'plant_name_in_indonesia':'', 
        'plant_name_in_local':'Inasi Koi', 
        'plant_name_in_latin':'<i>Scaevola Taccada</i> (Gaertn.) Roxb..', 
        'taxonomists':'JW, VS', 
        'treatments':'Malaria and stomachache.', 
        'traditional_usage':'', 
        'known_phytochemical_constituents':'Scaevolaside, chlorogenic acid, saponins, glycosides, lipids and alkaloids.32', 
        'known_phytochemical_constituents_reference':'', 
        'known_biological_activity':'Antiviral activity.32', 
        'known_biological_activity_reference':'', 
        'plant_photo':'./storage/images/plants/plant-kurudu-inasi-koi.jpg', 
        'tribe':'Kurudu', 
        'contributor':'Tisha Rumbewas', 
        'contributor_photo':'./storage/images/team/team-tisha-rumbewas.png',
    },
    {
        'id':'05', 
        'created_at':'08/04/2023', 
        'updated_at':'08/04/2023', 
        'plant_name_in_indonesia':'', 
        'plant_name_in_local':'Anamyaum', 
        'plant_name_in_latin':'<i>Alstonia scholaris</i> (L.) R.Br.', 
        'taxonomists':'JW, VS', 
        'treatments':'Asthma, malaria, pneumonia, pain, fever, diarrhea, and dysentery.', 
        'traditional_usage':'', 
        'known_phytochemical_constituents':'', 
        'known_phytochemical_constituents_reference':'', 
        'known_biological_activity':'Cytotoxic, antioxidant and anticancer activities.27', 
        'known_biological_activity_reference':'', 
        'plant_photo':'./storage/images/plants/plant-kurudu-anamyaum.jpg', 
        'tribe':'Kurudu', 
        'contributor':'Tisha Rumbewas', 
        'contributor_photo':'./storage/images/team/team-tisha-rumbewas.png',
    },
    {
        'id':'04', 
        'created_at':'08/04/2023', 
        'updated_at':'08/04/2023', 
        'plant_name_in_indonesia':'', 
        'plant_name_in_local':'Krataweri, Katawei', 
        'plant_name_in_latin':'<i>Artocarpus vriesianus</i> Miq.', 
        'taxonomists':'JW, VS', 
        'treatments':'Relieve mucus and fungal infection on the tongue of babies, cough on adults.', 
        'traditional_usage':'', 
        'known_phytochemical_constituents':'', 
        'known_phytochemical_constituents_reference':'', 
        'known_biological_activity':'', 
        'known_biological_activity_reference':'', 
        'plant_photo':'./storage/images/plants/plant-kurudu-krataweri.jpg', 
        'tribe':'Kurudu', 
        'contributor':'Tisha Rumbewas', 
        'contributor_photo':'./storage/images/team/team-tisha-rumbewas.png', 
    },
    {
        'id':'03', 
        'created_at':'08/04/2023', 
        'updated_at':'08/04/2023', 
        'plant_name_in_indonesia':'', 
        'plant_name_in_local':'Inasi Koi', 
        'plant_name_in_latin':'<i>Scaevola Taccada</i> (Gaertn.) Roxb..', 
        'taxonomists':'JW, VS', 
        'treatments':'Malaria and stomachache.', 
        'traditional_usage':'', 
        'known_phytochemical_constituents':'Scaevolaside, chlorogenic acid, saponins, glycosides, lipids and alkaloids.32', 
        'known_phytochemical_constituents_reference':'', 
        'known_biological_activity':'Antiviral activity.32', 
        'known_biological_activity_reference':'', 
        'plant_photo':'./storage/images/plants/plant-kurudu-inasi-koi.jpg', 
        'tribe':'Kurudu', 
        'contributor':'Tisha Rumbewas', 
        'contributor_photo':'./storage/images/team/team-tisha-rumbewas.png',
    },
    {
        'id':'02', 
        'created_at':'08/04/2023', 
        'updated_at':'08/04/2023', 
        'plant_name_in_indonesia':'', 
        'plant_name_in_local':'Anamyaum', 
        'plant_name_in_latin':'<i>Alstonia scholaris</i> (L.) R.Br.', 
        'taxonomists':'JW, VS', 
        'treatments':'Asthma, malaria, pneumonia, pain, fever, diarrhea, and dysentery.', 
        'traditional_usage':'', 
        'known_phytochemical_constituents':'', 
        'known_phytochemical_constituents_reference':'', 
        'known_biological_activity':'Cytotoxic, antioxidant and anticancer activities.27', 
        'known_biological_activity_reference':'', 
        'plant_photo':'./storage/images/plants/plant-kurudu-anamyaum.jpg', 
        'tribe':'Kurudu', 
        'contributor':'Tisha Rumbewas', 
        'contributor_photo':'./storage/images/team/team-tisha-rumbewas.png',
    },
    {
        'id':'01', 
        'created_at':'08/04/2023', 
        'updated_at':'08/04/2023', 
        'plant_name_in_indonesia':'', 
        'plant_name_in_local':'Krataweri, Katawei', 
        'plant_name_in_latin':'<i>Artocarpus vriesianus</i> Miq.', 
        'taxonomists':'JW, VS', 
        'treatments':'Relieve mucus and fungal infection on the tongue of babies, cough on adults.', 
        'traditional_usage':'', 
        'known_phytochemical_constituents':'', 
        'known_phytochemical_constituents_reference':'', 
        'known_biological_activity':'', 
        'known_biological_activity_reference':'', 
        'plant_photo':'./storage/images/plants/plant-kurudu-krataweri.jpg', 
        'tribe':'Kurudu', 
        'contributor':'Tisha Rumbewas', 
        'contributor_photo':'./storage/images/team/team-tisha-rumbewas.png', 
    },
]


buildTable(plants)

function buildTable(data){

    var table = document.getElementById('dataPlants')
    var plant_name_in_latin = document.getElementById('plant_name_in_latin')

    for (var i = 0; i < data.length; i++){
        
        var row = `
        <div>
            <a 
                @click.prevent="
                    page='theplantsdetail'
                    document.getElementById('plant_name_in_latin').innerHTML = ${data[i].plant_name_in_local}
                " 
            href="" class="cursor-pointer">
                <img src="${data[i].plant_photo}" class="mb-4 rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md" alt="${data[i].plant_photo}">
            </a>
            <h3 class="text-4xl font-bold dark:text-gray-300">${data[i].plant_name_in_local}</h3>
            <p class="dark:text-gray-400 mb-4"><span>${data[i].plant_name_in_latin}</span></p>
            <p class="dark:text-gray-400">Latin <span class="font-semibold">By ${data[i].contributor}</span></p>
            <p class="dark:text-gray-400">Updated on <span class="font-semibold">${data[i].updated_at}</span></p>
        </div>`

        table.innerHTML += row

    }

}