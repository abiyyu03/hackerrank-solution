def recursive_binary_search(list, target):
    if len(list) == 0:
        return False
    else:
        midpoint = (len(list)) // 2
        
        if list[midpoint] == target:
            return midpoint
        elif list[midpoint] < target:
            return recursive_binary_search(list[midpoint+1:], target)
        else:
            return recursive_binary_search(list[:midpoint], target)

def verify(index):
    print("Target found at index:",index)
        
numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25]
result = recursive_binary_search(numbers,14)
verify(result)