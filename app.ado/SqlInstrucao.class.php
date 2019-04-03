<?php

 /*
  * Classe instrução
  * Proposito de  provê todas as instruções
  * SQL (select, inset, delete e update)
  */

 abstract class SqlInstrucao
 {
   procted $sql; //instrucao sql
   procted $criterio; //o objetivo do criterio;

   /* metodo setEntidade()
    * define o nome da tabela para ser manipulada
    * @param $entidade = tabela
    */
   
   final public function setEntidade($entidade)
   {
   	 $this->entidade = $entidade;
   }

   /*
    * método getEntidade()
    *retorna o nome da entidade(tabela)
    */

   final public function getEntidade()
   {
   	return $this->entidade;
   }

   /*
    * método setCriterio()
    * Define o critério da seleção dos dados através da composição do objeto
    * do tipo TCritéiro oferecendo uma interface para definição do tipo Tcriterio
    */

   public function setCritério(Tcriterio $criterio)
   {
   	 $this->criterio = $criterio;
   }

   /*
    * método getInstrução()
    * declar como <abastract> obrigando o declara nas classes filhas
    * seu comportamento será diferente em cada classe
    */

   abstract function getInstruction();

}

?>