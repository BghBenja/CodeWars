"""
I will give you an integer. Give me back a shape that is as long and wide as the integer. The integer will be a whole number between 1 and 50.

Example
n = 3, so I expect a 3x3 square back just like below as a string:

+++
+++
+++
"""

def mine_generate_shape(n):
    result = []
    for i in range(n):
        result.append("+"*n)
    return "\n".join(result)

def best__generate_shape(n):
    return '\n'.join(['+' * n] * n)