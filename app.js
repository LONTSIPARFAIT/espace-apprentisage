

const prenom = "Perfect"

const direSalut = (prenom) => {
    return `Salut  ${prenom} !`
}
console.log(direSalut(prenom));

const amis = ["Julien", "Alimatou", "Perfecto"];

amis.push("Divine")

const cadeaux = ["Vélo", "Console", "Livre"];

cadeaux.map((cadeaux) => {
    console.log(`Je veut un(e) ${cadeaux}`)
})

const jouet = { nom: "Ballon", prix: 10 }

console.log(jouet.nom)

const score = 100
const bonus = 50
const total = score + bonus

console.log(`Ton score est : ${total}`);

if (total > 100) {
    console.log("Gagné");    
}  else {
    console.log("Perdu");
    
}

