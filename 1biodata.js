function myBiodata(biodata){
  let biodataObj = {
    "name": 'Ari Supriatna',
    "address": 'Tanah kusir 2',
    "hobbies": [
      'Ngoding', 'Browsing', 'Listening music', 'Adventure'
    ],
    "is_married": false,
    "school": {
      "highSchool": 'MAN 2 Lebak',
      "university": 'UNPAM'
    },
    "skill": [
      {
        "HTML5": "90 %",
        "CSS": "80 %",
        "Javascript": "95 %",
        "VueJS": "35 %",
        "C++": "50 %",
        "Bootstrap": "95 %",
        "GIT": "80 %",
      }
    ]
  }

  return biodataObj
}
console.log(myBiodata('ari'));
