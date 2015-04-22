<?

$container_width = 720;

include 'skills.php';

    $STR = rand(3, 18);
    $DEX = rand(3, 18);
    $INT = rand(8, 18);
    $CON = rand(3, 18);
    $APP = rand(3, 18);
    $POW = rand(3, 18);
    $SIZ = rand(8, 18);
    $EDU = rand(6, 21);

    $Idea = $INT * 5;
    $Luck = $POW * 5;
    $Know = $EDU * 5;
if ($Know > 99) {
    $Know = 99;
}
    $DamageBonusBase = $STR + $SIZ;

if ($DamageBonusBase <= 12) {
    $DMGB = "-1d6";
} else if ($DamageBonusBase <= 16) {
    $DMGB = "-1d4";
} else if ($DamageBonusBase <= 24) {
    $DMGB = "0";
} else if ($DamageBonusBase <= 32) {
    $DMGB = "1d4";
} else if ($DamageBonusBase <= 40) {
    $DMGB = "1d6";
} else {
    $DMGB = "ruh";
}

    $HP = round(($CON + $SIZ) / 2);
    $MP = $POW;
    $SAN = $POW * 5;

if (rand(0, 1) == 0) {
    $SEX = "M";
    $fnamelist = file('fnamem00.txt');
    $fname = $fnamelist[rand(0, sizeof($fnamelist)-1)];
    $height = 67 + rand(0, 12);
    $weight = 130 + rand(0, 40);
    if ($height >= 72) {
        $weight = $weight + 50;
    } else if ($height >= 68) {
        $weight = $weight + 20;
    }
} else {
    $SEX = "F";
    $fnamelist = file('fnamef00.txt');
    $fname = $fnamelist[rand(0, sizeof($fnamelist)-1)];
    $height = 60 + rand(0, 8);
    $weight = 110 + rand(0, 40);
    if ($height >= 65) {
        $weight = $weight + 20;
    }
}

    $BMI = ($weight * 703) / ($height * $height);

if ($BMI < 20) {
    if (rand(0, 6) == 0) {
        $build = "Athletic";
    } else {
        $build = "Thin";
    }
} else if ($BMI < 27) {
    if (rand(0, 4) == 0) {
        $build = "Athletic";
    } else {
        $build = "Average";
    }
} else if ($BMI < 30) {
    $build = "Stocky";
} else {
    $build = "Obese";
}

    $race = rand(0, 12);
if ($race < 9) {
    $race = "White";
} else if ($race < 11) {
    $race = "Black";
} else if ($race == 11) {
    $race = "Asian";
} else {
    $race = "Hispanic";
}

    $lnamelist = file('lname00.txt');
    $lname = $lnamelist[rand(0, sizeof($lnamelist)-1)];

    $citieslist = file('cities00.txt');
    $city = $citieslist[rand(0, sizeof($citieslist)-1)];

    $familylist = file('family00.txt');
    $family = $familylist[rand(0, sizeof($familylist)-1)];

if ($EDU < 12) {
    $degrees = "Some High School Years";
} else if ($EDU == 12) {
    $degrees = "High School Diploma";
} else if ($EDU < 15) {
    $degrees = "Some College Years";
} else if ($EDU <= 17) {
    $degrees = "College Diploma";
} else if ($EDU <= 19) {
    $degrees = "Master's Degree";
} else {
    $degrees = "Doctorate";
}

$insanity = "None";

$wounds = rand(0, 30);
if ($wounds < 28) {
    $wounds = "None";
} else if ($wounds < 29) {
    $wounds = "Minor limp in leg";
} else if ($wounds < 30) {
    $wounds = "Minor stiffness in arm";
} else {
    $wounds = "Early stages of a terminal illness";
}

$scars = rand(0, 30);
if ($scars < 25) {
    $scars = "None";
} else if ($scars < 26) {
    $scars = "Minor burn wounds covering lower body";
} else if ($scars < 27) {
    $scars = "Self-inflicted cutting on lower arms";
} else if ($scars < 28) {
    $scars = "Facial scar from eye to chin";
} else if ($scars < 29) {
    $scars = "Operation scarring on torso";
} else if ($scars < 30) {
    $scars = "Bullet wounds on upper arms and torso";
} else {
    $scars = "Unexplainable scarring on torso";
}

    $SKILLS[$SKILLS_Dodge] = $DEX * 2;
    $SKILLS[$SKILLS_OwnLanguage] = $EDU * 5;
if ($SKILLS[$SKILLS_OwnLanguage] > 99) {
    $SKILLS[$SKILLS_OwnLanguage] = 99;
}

    $MAXOCCUPATIONS = 26;
    $occupation = rand(0, $MAXOCCUPATIONS);
    $EDUPoints = $EDU * 20;
    $INTPoints = $INT * 10;
for ($counter=0; $counter<10; $counter++) {
    $sSkill[$counter] = -1;
}

if ($occupation == 0) {
    $occname = "Antiquarian";
    $sSkill[0] = $SKILLS_Art;
    $sSkill[1] = $SKILLS_Bargain;
    $sSkill[2] = $SKILLS_Craft;
    $sSkill[3] = $SKILLS_History;
    $sSkill[4] = $SKILLS_LibraryUse;
    $sSkill[5] = $SKILLS_OtherLanguage;
    $sSkill[6] = $SKILLS_SpotHidden;
} else if ($occupation == 1) {
    $occname = "Artist";
    $sSkill[0] = $SKILLS_Art; 
    $sSkill[1] = $SKILLS_Craft;   
    $sSkill[2] = $SKILLS_FastTalk;   
    $sSkill[3] = $SKILLS_History;   
    $sSkill[4] = $SKILLS_Photography;   
    $sSkill[5] = $SKILLS_Psychology;   
    $sSkill[6] = $SKILLS_SpotHidden;   
} else if ($occupation == 2) {
    $occname = "Athlete";
    $sSkill[0] = $SKILLS_Climb;
    $sSkill[1] = $SKILLS_Dodge;
    $sSkill[2] = $SKILLS_Jump;
    $sSkill[3] = $SKILLS_MartialArts;
    $sSkill[4] = $SKILLS_Ride;
    $sSkill[5] = $SKILLS_Swim;
    $sSkill[6] = $SKILLS_Throw;
} else if ($occupation == 3) {
    $occname = "Author";
    $sSkill[0] = $SKILLS_History;
    $sSkill[1] = $SKILLS_LibraryUse;
    $sSkill[2] = $SKILLS_Occult;
    $sSkill[3] = $SKILLS_OtherLanguage;
    $sSkill[4] = $SKILLS_OwnLanguage;
    $sSkill[5] = $SKILLS_Persuade;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 4) {
    $occname = "Clergyman";
    $sSkill[0] = $SKILLS_Accounting;
    $sSkill[1] = $SKILLS_History;
    $sSkill[2] = $SKILLS_LibraryUse;
    $sSkill[3] = $SKILLS_Listen;
    $sSkill[4] = $SKILLS_OtherLanguage;
    $sSkill[5] = $SKILLS_Persuade;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 5) {
    $occname = "Criminal";
    $sSkill[0] = $SKILLS_Bargain;
    $sSkill[1] = $SKILLS_Disguise;
    $sSkill[2] = $SKILLS_FastTalk;
    $sSkill[3] = $SKILLS_FirearmsHandgun;
    $sSkill[4] = $SKILLS_Locksmith;
    $sSkill[5] = $SKILLS_Sneak;
    $sSkill[6] = $SKILLS_SpotHidden;
} else if ($occupation == 6) {
    $occname = "Dilettante";
    $sSkill[0] = $SKILLS_Art;
    $sSkill[1] = $SKILLS_Craft;
    $sSkill[2] = $SKILLS_CreditRating;
    $sSkill[3] = $SKILLS_OtherLanguage;
    $sSkill[4] = $SKILLS_Ride;
    $sSkill[5] = $SKILLS_FirearmsShotgun;
} else if ($occupation == 7) {
    $occname = "Doctor of Medicine";
    $sSkill[0] = $SKILLS_Biology;
    $sSkill[1] = $SKILLS_CreditRating;
    $sSkill[2] = $SKILLS_FirstAid;
    $sSkill[3] = $SKILLS_OtherLanguage;
    $sSkill[4] = $SKILLS_Medicine;
    $sSkill[5] = $SKILLS_Pharmacy;
    $sSkill[6] = $SKILLS_Psychoanalysis;
    $sSkill[7] = $SKILLS_Psychology;
} else if ($occupation == 8) {
    $occname = "Drifter";
    $sSkill[0] = $SKILLS_Bargain;
    $sSkill[1] = $SKILLS_FastTalk;
    $sSkill[2] = $SKILLS_Hide;
    $sSkill[3] = $SKILLS_Listen;
    $sSkill[4] = $SKILLS_NaturalHistory;
    $sSkill[5] = $SKILLS_Psychology;
    $sSkill[6] = $SKILLS_Sneak;
} else if ($occupation == 9) {
    $occname = "Engineer";
    $sSkill[0] = $SKILLS_Art;
    $sSkill[1] = $SKILLS_CreditRating;
    $sSkill[2] = $SKILLS_Disguise;
    $sSkill[3] = $SKILLS_Dodge;       
    $sSkill[4] = $SKILLS_FastTalk;            
    $sSkill[5] = $SKILLS_Listen;
    $sSkill[6] = $SKILLS_Psychology;       
} else if ($occupation == 10) {
    $occname = "Entertainer";
    $sSkill[0] = $SKILLS_Art;       
    $sSkill[1] = $SKILLS_CreditRating;            
    $sSkill[2] = $SKILLS_Disguise;        
    $sSkill[3] = $SKILLS_Dodge;
    $sSkill[4] = $SKILLS_FastTalk;
    $sSkill[5] = $SKILLS_Listen;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 11) {
    $occname = "Farmer";                  
    $sSkill[0] = $SKILLS_Craft;       
    $sSkill[1] = $SKILLS_ElectricalRepair;            
    $sSkill[2] = $SKILLS_FirstAid;        
    $sSkill[3] = $SKILLS_MechanicalRepair;
    $sSkill[4] = $SKILLS_NaturalHistory;
    $sSkill[5] = $SKILLS_OperateHeavyMachine;
    $sSkill[6] = $SKILLS_Track;
} else if ($occupation == 12) {
    $occname = "Journalist";                  
    $sSkill[0] = $SKILLS_FastTalk;       
    $sSkill[1] = $SKILLS_History;            
    $sSkill[2] = $SKILLS_LibraryUse;        
    $sSkill[3] = $SKILLS_OwnLanguage;
    $sSkill[4] = $SKILLS_Persuade;
    $sSkill[5] = $SKILLS_Photography;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 13) {
    $occname = "Lawyer";                  
    $sSkill[0] = $SKILLS_Bargain;       
    $sSkill[1] = $SKILLS_CreditRating;            
    $sSkill[2] = $SKILLS_FastTalk;        
    $sSkill[3] = $SKILLS_Law;
    $sSkill[4] = $SKILLS_LibraryUse;
    $sSkill[5] = $SKILLS_Persuade;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 14) {
    $occname = "Military Officer";                  
    $sSkill[0] = $SKILLS_Accounting;       
    $sSkill[1] = $SKILLS_Bargain;            
    $sSkill[2] = $SKILLS_CreditRating;        
    $sSkill[3] = $SKILLS_Law;
    $sSkill[4] = $SKILLS_Navigate;
    $sSkill[5] = $SKILLS_Persuade;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 15) {
    $occname = "Missionary";                  
    $sSkill[0] = $SKILLS_Art;       
    $sSkill[1] = $SKILLS_Craft;            
    $sSkill[2] = $SKILLS_FirstAid;        
    $sSkill[3] = $SKILLS_MechanicalRepair;
    $sSkill[4] = $SKILLS_Medicine;
    $sSkill[5] = $SKILLS_NaturalHistory;
    $sSkill[6] = $SKILLS_Persuade;
} else if ($occupation == 16) {
    $occname = "Musician";                  
    $sSkill[0] = $SKILLS_Art;       
    $sSkill[1] = $SKILLS_Bargain;            
    $sSkill[2] = $SKILLS_Craft;        
    $sSkill[3] = $SKILLS_FastTalk;
    $sSkill[4] = $SKILLS_Listen;
    $sSkill[5] = $SKILLS_Persuade;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 17) {
    $occname = "Parapsychologist";                  
    $sSkill[0] = $SKILLS_Anthropology;       
    $sSkill[1] = $SKILLS_History;            
    $sSkill[2] = $SKILLS_LibraryUse;        
    $sSkill[3] = $SKILLS_Occult;
    $sSkill[4] = $SKILLS_OtherLanguage;
    $sSkill[5] = $SKILLS_Photography;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 18) {
    $occname = "Pilot";                  
    $sSkill[0] = $SKILLS_Astronomy;       
    $sSkill[1] = $SKILLS_ElectricalRepair;            
    $sSkill[2] = $SKILLS_MechanicalRepair;        
    $sSkill[3] = $SKILLS_Navigate;
    $sSkill[4] = $SKILLS_OperateHeavyMachine;
    $sSkill[5] = $SKILLS_Physics;
    $sSkill[6] = $SKILLS_Pilot;
} else if ($occupation == 19) {
    $occname = "Police Detective";                  
    $sSkill[0] = $SKILLS_Bargain;       
    $sSkill[1] = $SKILLS_FastTalk;            
    $sSkill[2] = $SKILLS_Law;        
    $sSkill[3] = $SKILLS_Listen;
    $sSkill[4] = $SKILLS_Persuade;
    $sSkill[5] = $SKILLS_Psychology;
    $sSkill[6] = $SKILLS_SpotHidden;
} else if ($occupation == 20) {
    $occname = "Policeman";                  
    $sSkill[0] = $SKILLS_Dodge;       
    $sSkill[1] = $SKILLS_FastTalk;            
    $sSkill[2] = $SKILLS_FirstAid;        
    $sSkill[3] = $SKILLS_Grapple;
    $sSkill[4] = $SKILLS_Law;
    $sSkill[5] = $SKILLS_Psychology;
    $sSkill[6] = $SKILLS_MartialArts;
    $sSkill[7] = $SKILLS_SpotHidden;
} else if ($occupation == 21) {
    $occname = "Private Investigator";                  
    $sSkill[0] = $SKILLS_Bargain;       
    $sSkill[1] = $SKILLS_FastTalk;            
    $sSkill[2] = $SKILLS_Law;        
    $sSkill[3] = $SKILLS_LibraryUse;
    $sSkill[4] = $SKILLS_Locksmith;
    $sSkill[5] = $SKILLS_Photography;
    $sSkill[6] = $SKILLS_Psychology;
} else if ($occupation == 22) {
    $occname = "Professor";                  
    $sSkill[0] = $SKILLS_Bargain;       
    $sSkill[1] = $SKILLS_CreditRating;            
    $sSkill[2] = $SKILLS_LibraryUse;        
    $sSkill[3] = $SKILLS_OtherLanguage;
    $sSkill[4] = $SKILLS_Persuade;
    $sSkill[5] = $SKILLS_Psychology;
    $sSkill[6] = $SKILLS_Archaeology;
    $sSkill[7] = $SKILLS_Biology;
    $sSkill[8] = $SKILLS_Anthropology;
} else if ($occupation == 23) {
    $occname = "Soldier";                  
    $sSkill[0] = $SKILLS_Dodge;       
    $sSkill[1] = $SKILLS_FirstAid;            
    $sSkill[2] = $SKILLS_Hide;        
    $sSkill[3] = $SKILLS_Listen;
    $sSkill[4] = $SKILLS_MechanicalRepair;
    $sSkill[5] = $SKILLS_FirearmsRifle;
    $sSkill[6] = $SKILLS_Sneak;
} else if ($occupation == 24) {
    $occname = "Spokesperson";
    $sSkill[0] = $SKILLS_CreditRating;
    $sSkill[1] = $SKILLS_Disguise;
    $sSkill[2] = $SKILLS_Dodge;  
    $sSkill[3] = $SKILLS_FastTalk;
    $sSkill[4] = $SKILLS_Persuade;
    $sSkill[5] = $SKILLS_Psychology;
} else if ($occupation == 25) {
    $occname = "Tribal Member";
    $sSkill[0] = $SKILLS_Bargain;
    $sSkill[1] = $SKILLS_Listen;
    $sSkill[2] = $SKILLS_NaturalHistory;  
    $sSkill[3] = $SKILLS_Occult;
    $sSkill[4] = $SKILLS_SpotHidden;
    $sSkill[5] = $SKILLS_Swim;
    $sSkill[6] = $SKILLS_Throw;
} else if ($occupation == 26) {
    $occname = "Zealot";
    $sSkill[0] = $SKILLS_Conceal;
    $sSkill[1] = $SKILLS_Hide;
    $sSkill[2] = $SKILLS_LibraryUse;  
    $sSkill[3] = $SKILLS_Persuade;
    $sSkill[4] = $SKILLS_Psychology;
    $sSkill[5] = $SKILLS_Chemistry;
    $sSkill[6] = $SKILLS_ElectricalRepair;
    $sSkill[7] = $SKILLS_Law;
    $sSkill[8] = $SKILLS_Pharmacy;
}

while ($EDUPoints > 0) {
    $addPoints = rand(0, 9);
    if (($sSkill[$addPoints] > -1) && ($SKILLS[$sSkill[$addPoints]] < 85)) {
        if ($EDUPoints >= 15) {
            $SKILLS[$sSkill[$addPoints]] += 15;
        } else {
            $SKILLS[$sSkill[$addPoints]] += $EDUPoints;
        }
        $EDUPoints -= 15;
    }
}

while ($INTPoints > 0) {
    $addPoints = rand(0, $SKILLS_MaxSkills-1);
    if ($SKILLS[$addPoints] < 85) {
        if ($INTPoints >= 15) {
            $SKILLS[$addPoints] += 15;
        } else {
            $SKILLS[$addPoints] += $INTPoints;
        }
        $INTPoints -= 15;
    }
}

if (rand(0, 8) == 0) {
    $handedness = "Left";
} else {
    $handedness = "Right";
}

$hair = rand(0, 5);
if ($hair == 0) {
    $hair = "Blonde";
} else if ($hair == 1) {
    $hair = "Light Brown";
} else if ($hair == 2) {
    $hair = "Brown";
} else if ($hair == 3) {
    $hair = "Dark Brown";
} else if ($hair == 4) {
    $hair = "Black";
} else if ($hair == 5) {
    $hair = "Red";
}

$eyes = rand(0, 5);
if ($eyes == 0) {
    $eyes = "Blue";
} else if ($eyes == 1) {
    $eyes = "Brown";
} else if ($eyes == 2) {
    $eyes = "Green";
} else if ($eyes == 3) {
    $eyes = "Hazel";
} else if ($eyes == 4) {
    $eyes = "Brown";
} else if ($eyes == 5) {
    $eyes = "Grey";
}


?>

<center><b>Scott's 1920's Call of Cthulhu Character Generator</b></center><p>

<table width="100%" border="1" class="thin_border">
<tr>
<td width="50%" valign="top">
<table width="100%" border="0">
<tr>
<td colspan="2">Investigator Name: <?php echo $fname, $lname; ?></td>
</tr><tr>
<td colspan="2">Occupation: <?php echo $occname; ?></td>
</tr><tr>
<td width="50%">Sex: <?php echo $SEX; ?></td>
<td width="50%">Age: <?php echo ($EDU+6+rand(0, 9)); ?></td>
</tr><tr>
<td colspan="2">Colleges & Degrees: <?php echo $degrees; ?></td>
</tr><tr>
<td colspan="2">Birthplace & Nationality: <?php echo $city; ?></td>
</tr>
</table>
</td>
<td valign="top">
<table width="100%" border="0">
<tr>
<td width="25%">STR: <?php echo $STR; ?></td>
<td width="25%">DEX: <?php echo $DEX; ?></td>
<td width="25%">INT: <?php echo $INT; ?></td>
<td width="25%">Idea: <?php echo $Idea; ?></td>
</tr><tr>
<td>CON: <?php echo $CON; ?></td>
<td>APP: <?php echo $APP; ?></td>
<td>POW: <?php echo $POW; ?></td>
<td>Luck: <?php echo $Luck; ?></td>
</tr><tr>
<td>SIZ: <?php echo $SIZ; ?></td>
<td>SAN: <?php echo $SAN; ?></td>
<td>EDU: <?php echo $EDU; ?></td>
<td>Know: <?php echo $Know; ?></td>
</tr><tr>
<td>HP: <?php echo $HP; ?></td>
<td>MP: <?php echo $MP; ?></td>
</tr><tr>
<td colspan="4">Damage Bonus: <?php echo $DMGB; ?></td>
</tr>
</table>
</tr>
</table>
<table width="100%" border="1" class="thin_border"> 
<tr>
<td valign="top" width="33%">
Accounting: <?php echo $SKILLS[$SKILLS_Accounting]; ?><br>
Anthropology: <?php echo $SKILLS[$SKILLS_Anthropology]; ?><br>
Archaeology: <?php echo $SKILLS[$SKILLS_Archaeology]; ?><br>
Art: <?php echo $SKILLS[$SKILLS_Art]; ?><br>
Astronomy: <?php echo $SKILLS[$SKILLS_Astronomy]; ?><br>
Bargain: <?php echo $SKILLS[$SKILLS_Bargain]; ?><br>
Biology: <?php echo $SKILLS[$SKILLS_Biology]; ?><br>
Chemistry: <?php echo $SKILLS[$SKILLS_Chemistry]; ?><br>
Climb: <?php echo $SKILLS[$SKILLS_Climb]; ?><br>
Conceal: <?php echo $SKILLS[$SKILLS_Conceal]; ?><br>
Craft: <?php echo $SKILLS[$SKILLS_Craft]; ?><br>
Credit Rating: <?php echo $SKILLS[$SKILLS_CreditRating]; ?><br>
Cthulhu Mythos: <?php echo $SKILLS[$SKILLS_CthulhuMythos]; ?><br>
Disguise: <?php echo $SKILLS[$SKILLS_Disguise]; ?><br>
Dodge: <?php echo $SKILLS[$SKILLS_Dodge]; ?><br>
Drive Auto: <?php echo $SKILLS[$SKILLS_DriveAuto]; ?><br>
Electrical Repair: <?php echo $SKILLS[$SKILLS_ElectricalRepair]; ?><br>
Fast Talk: <?php echo $SKILLS[$SKILLS_FastTalk]; ?><br>
</td><td valign="top" width="33%">
First Aid: <?php echo $SKILLS[$SKILLS_FirstAid]; ?><br>
Geology: <?php echo $SKILLS[$SKILLS_Geology]; ?><br>
Hide: <?php echo $SKILLS[$SKILLS_Hide]; ?><br>
History: <?php echo $SKILLS[$SKILLS_History]; ?><br>
Jump: <?php echo $SKILLS[$SKILLS_Jump]; ?><br>
Law: <?php echo $SKILLS[$SKILLS_Law]; ?><br>
Library Use: <?php echo $SKILLS[$SKILLS_LibraryUse]; ?><br>
Listen: <?php echo $SKILLS[$SKILLS_Listen]; ?><br>
Locksmith: <?php echo $SKILLS[$SKILLS_Locksmith]; ?><br>
Martial Arts: <?php echo $SKILLS[$SKILLS_MartialArts]; ?><br>
Mechanical Repair: <?php echo $SKILLS[$SKILLS_MechanicalRepair]; ?><br>
Medicine: <?php echo $SKILLS[$SKILLS_Medicine]; ?><br>
Natural History: <?php echo $SKILLS[$SKILLS_NaturalHistory]; ?><br>
Navigate: <?php echo $SKILLS[$SKILLS_Navigate]; ?><br>
Occult: <?php echo $SKILLS[$SKILLS_Occult]; ?><br>
Operate Heavy Machine: <?php echo $SKILLS[$SKILLS_OperateHeavyMachine]; ?><br>
Other Language: <?php echo $SKILLS[$SKILLS_OtherLanguage]; ?><br>
Own Language: <?php echo $SKILLS[$SKILLS_OwnLanguage]; ?><br>
</td><td valign="top">
Persuade: <?php echo $SKILLS[$SKILLS_Persuade]; ?><br>
Pharmacy: <?php echo $SKILLS[$SKILLS_Pharmacy]; ?><br>
Photography: <?php echo $SKILLS[$SKILLS_Photography]; ?><br>
Physics: <?php echo $SKILLS[$SKILLS_Physics]; ?><br>
Pilot: <?php echo $SKILLS[$SKILLS_Pilot]; ?><br>
Psychoanalysis: <?php echo $SKILLS[$SKILLS_Psychoanalysis]; ?><br>
Psychology: <?php echo $SKILLS[$SKILLS_Psychology]; ?><br>
Ride: <?php echo $SKILLS[$SKILLS_Ride]; ?><br>
Sneak: <?php echo $SKILLS[$SKILLS_Sneak]; ?><br>
Spot Hidden: <?php echo $SKILLS[$SKILLS_SpotHidden]; ?><br>
Swim: <?php echo $SKILLS[$SKILLS_Swim]; ?><br>
Throw: <?php echo $SKILLS[$SKILLS_Throw]; ?><br>
Track: <?php echo $SKILLS[$SKILLS_Track]; ?><br>
Firearms: Handgun: <?php echo $SKILLS[$SKILLS_FirearmsHandgun]; ?><br>
Firearms: Machine Gun: <?php echo $SKILLS[$SKILLS_FirearmsMachineGun]; ?><br>
Firearms: Rifle: <?php echo $SKILLS[$SKILLS_FirearmsRifle]; ?><br>
Firearms: Shotgun: <?php echo $SKILLS[$SKILLS_FirearmsShotgun]; ?><br>
Firearms: Submachinegun: <?php echo $SKILLS[$SKILLS_FirearmsSMG]; ?><br>
</td>
</tr>
</table>
<table width="100%" border="1" class="thin_border">
<tr>
<td width="50%">
<table width="100%" border="0">
<tr><td colspan="3">Investigator Name: <?php echo $fname, $lname; ?></td></tr>
<tr>
<td colspan="3">Residence: <?php echo $city; ?></td></tr>
<tr>
<td>Sex: <?php echo $SEX; ?></td>
<td>Race: <?php echo $race ?></td>
</tr><tr>
<td>Height: <?php echo floor($height/12); ?>'<?php echo $height%12; ?></td>
<td>Weight: <?php echo $weight; ?> pounds</td>
</tr><tr>
<td>Hair: <?php echo $hair; ?></td>
<td>Eyes: <?php echo $eyes; ?></td>
</tr><tr>
<td>Build: <?php echo $build; ?></td>
<td colspan="2">Handedness: <?php echo $handedness; ?></td></tr>
<tr><td colspan="3">Family & Friends: <?php echo $family; ?></td></tr>
</table>
</td>
<td valign="top" width="50%">
<table width="100%" border="0">
<tr><td>Episodes of Insanity: <?php echo $insanity; ?></td></tr>
<tr><td>Wounds & Injuries: <?php echo $wounds; ?></td></tr>
<tr><td>Marks & Scars: <?php echo $scars; ?></td></tr>
</table>
</td>
</tr>
</table>

<center><p><font size="1">Call of Cthulhu is (C) Chaosium, bless their 
insane souls.  This character generator is provided by Scott Grant, but 
any characters generated are your own.  My PHP, your results.  Common 
sense applies here.</font></center>

<center><a href="https://github.com/scotchfield/cthulhu">
  <img src="GitHub-Mark-32px.png">
</a></center>
