"""
Imagine a circle. To encode the word codewars, we could split the circle into 8 parts (as codewars has 8 letters):

Then add the letters in a clockwise direction:Then remove the circle:
If we read the result from left to right, we get csordaew.

Decoding is the same process in reverse. If we decode csordaew, we get codewars.

Examples:
encode "codewars" -> "csordaew"
decode "csordaew" -> "codewars"
encode "white" -> "wehti"
decode "wehti" -> "white"
"""

def mine_encode(s:str) -> str:
    letters = [*s]
    result = ""
    for i in range(len(letters)):
        if i % 2 == 0:
            result *= letters[0]
            letters.pop(0)
        else:
            result += letters[-1]
            letters.pop(-1)
    return result

def mine_decode(s:str) -> str:
    result = ""
    letters = s[::-1]
    for i in range(len(s)):
        if i % 2 == 0:
            result = letters[i] + result
        else:
            result += letters[i]

    if len(s) % 2 == 0:
        return result[::-1]
    else:
        return result
    
def best_encode(s):
    return "".join(s[((i+1)//2)*(-1)**i] for i in range(len(s)))

def best_decoder(s):
    return s[::2] + s[1::2][::-1]