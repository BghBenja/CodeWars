<?php

function mineLikes( $names ) {
    switch(count($names)){
      case 0:
        return 'no one likes this';
        break;
      case 1:
        return $names[0] . ' likes this';
        break;
      case 2:
        return $names[0] . ' and ' . $names[1] .  ' like this';
        break;
      case 3:
        return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . ' like this';
        break;
      default:
        return $names[0] . ', ' . $names[1] . ' and ' . (count($names) - 2) . ' others like this';
        break;
    }
}

function bestLikes(array $names): string {
	switch (count($names)) {
		case 0:
			return 'no one likes this';
		case 1:
			return vsprintf('%s likes this', $names);
		case 2:
			return vsprintf('%s and %s like this', $names);
		case 3:
			return vsprintf('%s, %s and %s like this', $names);
		default:
			return sprintf('%s, %s and %d others like this', $names[0], $names[1], count($names) - 2);
	}
}

?>