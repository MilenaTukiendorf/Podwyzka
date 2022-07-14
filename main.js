const users = [ {
        name: 'Jan',
        surname: 'Kowalski',
        salary: 4200, 
        birthYear: 1983,  
    }, 
    {
        name: 'Anna',
        surname: 'Nowak',
        salary: 7500,
        birthYear: 1994,
    },
    {
        name: 'Jakub',
        surname: 'Jakubowski', 
        salary: 18000,
        birthYear: 1985,
    },
    { 
        name: 'Piotr',
        surname:'Kozak', 
        salary: 4999,
        birthYear: 2000, 
    },
    {
        name:'Marek',
        surname: 'Sinica',
        salary: 7200,
        birthYear: 1989,
    },
    {
        name: 'Kamila',
        surname: 'Wiśniewska', 
        salary: 6800,
        birthYear: 1972,
    },
];


const getUserAge = (birthYear) => {
    var now = new Date();
    var year = now.getFullYear();
    userAge = year - birthYear;
    return userAge;
};


const welcomeUsers = (users)  => {
    for (let i = 0; i < users.length; i++) {
        const user = users[i];

        const name = user.name
        const surname = user.surname
        const salary = user.salary
        const birthYear = user.birthYear

        if (salary > 15000) {
            console.log('Witaj, prezesie!')
        }

        if (salary < 5000) {
            console.log(`${name} ${surname}, szykuj się na podwyżkę!`)
        }

        if (birthYear % 2 == 0) {
            userAge = getUserAge(birthYear)
            console.log(`Witaj ${name} ${surname}, w tym roku kończysz ${userAge} lat!`)
        }
        if (birthYear % 2 == 0 & birthYear >= 22 & birthYear < 25)  {
            userAge = getUserAge(birthYear)
            console.log(`Witaj ${name} ${surname}, w tym roku kończysz ${userAge} lata!`)
        }
        if (birthYear % 2 == 1) {
            console.log(`${name} ${surname}, jesteś zwolniony!`)
        }
    }
};


welcomeUsers(users); 
