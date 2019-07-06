function myBio(biodata){
  let mybiodata = {
    "name": 'Aryo Putra PUrwanto',
    "age": 24,
    "address":'Jl.Raya Bogor KM 46, Cibinong, Kab.Bogor'
    "hobbies": ["Futsal", "Jogging", "Game", "Traveling","Koding"],
    "is_married": false,
    "list_school":[
       {
      "university": 'ITB',
      "year_in":2012,
      "year_out" : 2016,
      "major" : 'Biology'
       }],
    "skills": [
      {
        "Android": 'beginner',
        "Java": 'beginner',
        "Web": 'beginner',
      }
    ]
  }

  return mybiodata
}
console.log(myBio('aryo'));
