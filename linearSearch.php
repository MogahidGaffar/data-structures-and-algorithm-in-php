<?php
function linearsearch ($arr , $element){                        //declaring the function
$n = count ($arr);                                              //getting the size of the array
    $key= $element;                                             //getting the size of the array
    for ($i = 0 ; $i < $n;$i++){                                //for loop in the array
       if($arr[$i] == $key){                                    //check if the elment is exists
            return "the Element is found in the index : ".$i;   //print message  if the elment is exists
        }
    }
    return "this  Element is not exists";                       //print message if the elment is not exists
}
$array =[11,9,5,21];                                            //declaring an array of elements
$element =5;                                                    //declaring variable containg the required element 

echo linearsearch($array,$element);                           //calling the function


/*
Linear search, though simple, comes with some disadvantages, especially when compared to more efficient searching algorithms like binary search. 
Here are a few drawbacks of the linear search:
1-Time Complexity: Linear search has a time complexity of O(n), where 'n' is the number of elements in the list. As the size of the list grows, the time taken for the search operation increases linearly. For larger datasets, this can be inefficient compared to algorithms with logarithmic time complexities (like binary search).
1-Not Suitable for Large Datasets: In scenarios where you have a large dataset, linear search might take a considerable amount of time to find an element, especially if the element being searched for is towards the end of the list. It doesn't take advantage of any pre-sorted order of elements, leading to potentially long search times.
3-Performance on Unsorted Data: Linear search doesn't require the data to be sorted, which is a convenience. However, its performance isn't optimized for unsorted data. If the data is unsorted and the element is at the end of the list, it might take 'n' iterations to find it.
4-Not Ideal for Repeat Searches: In situations where you need to search for the same element multiple times, linear search can be inefficient. Other algorithms (like binary search in a sorted list or hash-based structures) can significantly outperform linear search in these cases.
5-Limited Use in Certain Scenarios: Linear search isn't suitable for scenarios that require high-speed searching or real-time search operations. For critical systems or applications with strict performance requirements, more efficient search algorithms are preferred.
In summary, while linear search is easy to implement and applicable to both sorted and unsorted data, its inefficiency with larger datasets and higher time complexity compared to other search algorithms limit its use in scenarios where performance is crucial.
*/
?>