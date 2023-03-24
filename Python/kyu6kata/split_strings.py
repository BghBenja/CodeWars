"""
Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']
"""

def mine_solution(s):
    if len(s) == 0:
        return []
    result = [s[i:i+2] for i in range(0, len(s), 2)]

    if len(result[-1]) == 1:
        result[-1] += "_"

    return result

def best_solution(s):
    result = []
    if len(s) % 2:
        s += '_'
    for i in range(0, len(s), 2):
        result.append(s[i:i+2])
    return result