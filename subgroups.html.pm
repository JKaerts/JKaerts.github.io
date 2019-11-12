#lang pollen

◊topic{The subgroup criterion}

This page is an experiment in gradual exposition for a maths proof.
Try clicking on the plus-signs near the end of the proof.

◊theorem{Let ◊${H} be a nonempty subset of a group ◊${G,*}.
The following three statements are equivalent:
◊numbered-list{◊${H} is a subgroup of ◊${G,*}.


◊${\forall x, y\in H: x*y\in H} and ◊${x^{-1}\in H}


◊${\forall x, y\in H: x*y^{-1}\in H}
}}

◊em{Proof:} We first show that the second statement follows from the first. This is immediate from the definition of a group.

Now we show that the third statement follows from the second.
Take ◊${x, y\in H}.
Because ◊${y} lies in ◊${H}, also ◊${y^{-1}} lies in ◊${H}.
Therefore ◊${x*y^{-1}} must also lie in ◊${H}.

Finally we show that the first statement follows from the third.
Take an element ◊${h\in H}.
It is then given that ◊${h*h^{-1}=e\in H}.
Now that we know ◊${e} lies in ◊${H} we get for free that ◊exposition{since ◊${x^{-1} = e*x^{-1}}} for any ◊${x\in H}, that ◊${x^{-1}} also lies in $H$.
For random ◊${x, y\in H}, therefore, we know that ◊${x} and ◊${y} lie in ◊${H} and hence
◊$${x*(y^{-1})^{-1} = x*y\in H.}
This proves that ◊${*} is a binary operation on ◊${H}.
This operation is associative 
◊exposition{Since ◊${*} is an associative operation on ◊${G}, for every ◊${x,y,z\in G} we have that
◊$${(x*y)*z = x*(y*z).}
This fact remains when ◊${x}, ◊${y} and ◊${z} belong to ◊${H}.}
and ◊${e} is a neutral element for ◊${*}.
Moreover, every element ◊${x\in H} has an inverse which also belongs to ◊${H}.
This proves that ◊${H} is a group.