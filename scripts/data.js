const selectDia = document.querySelector("#dia")
const selecMes = document.querySelector("#mes")
const selectAno = document.querySelector("#ano")
const meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']

const geraDia = () => {
        for (let i = 1; i <= 31; i++) {
                let option = criaOption(i)
                selectDia.appendChild(option)
        }
}

const geraMes = (meses) => {
        meses.forEach(element => {
                let option = criaOption(element)
                selecMes.appendChild(option)

        });
}

const geraAno = () => {
        for (let i = 1940; i < new Date().getFullYear(); i++) {
                let option = criaOption(i)
                selectAno.appendChild(option)
        }
}

const criaOption = (v) => {
        let option = document.createElement('option')
        option.value = v
        option.innerHTML = v
        return option
}


geraDia()
geraMes(meses)
geraAno()