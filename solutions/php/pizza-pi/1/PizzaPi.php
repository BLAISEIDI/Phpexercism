<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizza,int $personne):int
    {
        return $pizza*(($personne*20)+200);
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateSauceRequirement(int $pizzas,int $volume):int
    {
        return (int)($pizzas*125)/$volume;
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateCheeseCubeCoverage($dimension,$thickness,$diameter)
    {
        return (int)(($dimension**3)/($thickness*pi()*$diameter));       throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateLeftOverSlices(int $pizza,int $ami)
    {
        if($personne===0){return $pizza*8;}
        $reste=(int)(($pizza*8)%$ami);   
        return $reste ;
        throw new \BadFunctionCallException("Implement the function");
    }
}
