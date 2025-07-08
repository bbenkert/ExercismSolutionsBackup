<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
       [$first, $last] = explode(' ', trim($name));
    return $this->initial($first) . ' ' . $this->initial($last);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
       $names = $this->initials($sweetheart_a) . "  +  " . $this->initials($sweetheart_b);

    return <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     {$names}     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
    }
}
