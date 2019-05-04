<?php

    /**
     * Validation.class [ HELPER ]
     * Validações extras como as da Check colocadas separadas para não perder caso a mesma seja atualizada
     *
     * @copyright (c) 2017, Rafael marques
     */
    class Validation {
        
        private static $MonthName;
        private static $SplitDateTime;
        private static $SplitDate;
        private static $SplitTime;

        /**
         * <b>Converte o mês das datas em Extenso:</b> Converte a data padrão do WorkControl para o formato de mês em extenso
         * @param DATETIME $Data = Data no forma WC AAAA-MM-DD HH:MM:SS -----> DD de Nome do mês de AAAA às HH:MM
         * @return STRING = Retorna a data convertida
         */
        public static function DataExt($Data) {

            self::$SplitDateTime = explode(" ", $Data);
            self::$SplitDate = explode("-", self::$SplitDateTime[0]);
            self::$SplitTime = explode(":", self::$SplitDateTime[1]);

            switch (self::$SplitDate[1]):

                case 1:
                    self::$MonthName = 'Janeiro';
                    break;

                case 2:
                    self::$MonthName = 'Fevereiro';
                    break;

                case 3:
                    self::$MonthName = 'Março';
                    break;

                case 4:
                    self::$MonthName = 'Abril';
                    break;

                case 5:
                    self::$MonthName = 'Maio';
                    break;

                case 6:
                    self::$MonthName = 'Junho';
                    break;

                case 7:
                    self::$MonthName = 'Julho';
                    break;

                case 8:
                    self::$MonthName = 'Agosto';
                    break;

                case 9:
                    self::$MonthName = 'Setembro';
                    break;

                case 10:
                    self::$MonthName = 'Outubro';
                    break;

                case 11:
                    self::$MonthName = 'Novembro';
                    break;

                case 12:
                    self::$MonthName = 'Dezembro';
                    break;

            endswitch;

            self::$MonthName = substr(self::$MonthName, 0, 3);

            return self::$SplitDate[2] . " de " . self::$MonthName . " de " . self::$SplitDate[0] . " às " . self::$SplitTime[0] . ":" . self::$SplitTime[1];
        }

        public static function getPermalink($Path, $PostName){
            return BASE . '/' . $Path . '/' . $PostName;
        }


        /**
         * <b>Retorna o nome do dia da Semana com base em uma data</b>
         * @param DATETIME $Data = Data no formato WC AAAA-MM-DD ----> (2019-05-01)
         * @return STRING = Retorna o nome do dia da Semana ----> Segunda-Feira, Terça-Feira, Quarta-Feira...
         */
        public static function getDayWeekName($Data){
            $day_week_number = date("w", strtotime($Data));
            $days_week_names = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
            return $days_week_names[$day_week_number];
        }

    }