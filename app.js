

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
