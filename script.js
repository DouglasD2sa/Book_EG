window.onload = function() {
    // Defina a senha esperada
    const senhaEsperada = "1234"; // Substitua pela senha real do banco de dados
  
    // Pede a senha ao usuário
    let senha = prompt("Digite a senha:");
  
    // Verifica se a senha é válida
    while (senha !== senhaEsperada) {
      senha = prompt("Senha incorreta. Por favor, tente novamente:");
    }
  
    // Autoriza apenas nomes válidos
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
      const nome = document.querySelector("input[name='fiscal']").value;
      if (!nome || nome.trim().length === 0) {
        alert('Por favor, insira um nome válido.');
        event.preventDefault();
      }
  
      const turnos = document.querySelectorAll("input[name='turno']");
      const turnoValido = [...turnos].some(turno => turno.checked);
      if (!turnoValido) {
        alert('Por favor, selecione um dos turnos.');
        event.preventDefault();
      }
    });
  
    // Verifica a quantidade de gabinetes
    const quant1gabInput = document.querySelector("input[name='quant1gab']");
    quant1gabInput.addEventListener("input", function(event) {
      if (event.target.value > 20) {
        event.target.value = 20;
      } else if (event.target.value < 0) {
        event.target.value = 0;
      }
    });
  
    // Verifica a quantidade de monitores
    const quant2lcdInput = document.querySelector("input[name='quant2lcd']");
    quant2lcdInput.addEventListener("input", function(event) {
      if (event.target.value > 20) {
        event.target.value = 20;
      } else if (event.target.value < 0) {
        event.target.value = 0;
      }
    });
  };
  