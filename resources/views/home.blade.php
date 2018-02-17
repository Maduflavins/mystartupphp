@extends('layouts.app')
@section('content')
<h1>Home</h1>
<p>
        Tracking and predicting influenza's annual spread is an important public health challenge that has attracted the efforts of everyone from the Centers for Disease Control and Prevention and Los Alamos National Laboratory to Google. 

        Now Missouri's Springfield-Greene County Health Department is making its local information on weekly flu cases more accessible and useful to local community with LiveStories, a visualization platform that lets users easily collect, format and provide context for their data. 
        
        With LiveStories, an epidemiologist can update a Google spreadsheet weekly with anonymized flu case data from health providers and the new data is automatically published to the website.
        
        
        SGCHD's data is presented through charts showing the total number of weekly cases and seasonal statistics on broken down by type and age. The LiveStories-based site also provides information on prevention and flu shots to give context for the data.  The hope is that the user-friendly display will encourage residents to get immunized and seek care if the flu does strike -- which would in turn help SGCHD track trends more accurately.
        
        “In the past, we haven’t done a great job of explaining to the community information in way that resonates to our public,” Kathryn Wall, public health information administrator at SGCHD, told GCN.  “The flu page is one example of our department stepping up to present data in an innovative way with context for our community to understand it.”
        
        SGCHD wants to use LiveStories for its work on opioid overdoses and its needs-assessment report. "We look at all sorts of information when it comes to the study of public health and what exists in our community," Wall said.  "Visualizing this information from different divisions in our health department makes us all on the same page to make decisions collectively."
</p>
@endsection

@section('sidebar')
    @parent
    <p>this is appended to the side bar</p>
@endsection
