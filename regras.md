# Regras

1. Não  usar getter e setter (só os crie qnd necessário)
    - Tell, don't ask
    > Tell: peça por uma funcionalidade. Ask: peça uma informação para realizar uma funcionalidade.
2. Ter apenas 1 nível de indentação por método
3. Nunca use `else`
    - Cogite o *early return* ou *guard clauses*
    - Sempre tentar falhar rápido (*fail fast*)
4. Envolva seus tipos primitivos ~~caso eles tenham comportamento~~
5. Coleções de primeira classe
6. Apenas 1 ponto por ~~linha~~ instrução
    - Evitar adentrar outras classes, dentro de outras classes ad infinito 
    > Não fale com estranhos ([Law of Demeter](http://wiki.c2.com/?LawOfDemeter)) - salvo em caso de *fluent interface* (`$sql->select('')->from('')->where('')`)
7. Nunca abrevie
8. Mantenha suas classes (máx 50 linhas) e pacotes pequenos (máx 10 classes)
9. Tenha no máximo 2 propriedades por classe
    - Devemos diminuir o máximo possível para diminuir a complexidade do código
