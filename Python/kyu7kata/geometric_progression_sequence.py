"""
In your class, you have started lessons about geometric progression. Since you are also a programmer, you have decided to write a function that will print first n elements of the sequence with the given constant r and first element a.

Result should be separated by comma and space.

Example
geometric_sequence_elements(2, 3, 5) == '2, 6, 18, 54, 162'
More info: https://en.wikipedia.org/wiki/Geometric_progression
"""

def mine_geometric_sequence_elements(a, r, n):
    result = []
    for i in range(n):
        result.append(str(a*pow(r,i)))
    return ", ".join(result)

def best_geometric_sequence_elements(a, r, n):
    return ", ".join(str(a * r**i) for i in range(n))