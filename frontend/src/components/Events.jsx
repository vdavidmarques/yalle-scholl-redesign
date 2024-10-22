import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";

const Events = () => {
  const [events, setEvents] = useState([]);
  useEffect(() => {
    apiService
      .getEventsData()
      .then((response) => {
        setEvents(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  });
  return (
    <section className="events">
      {events?.length > 0 && events.map((event) => (
          <div key={event.id}>
            <img src={event?.acf?.thumbEvent} alt={event.acf.alt} />
            <h1>{event?.title?.rendered} </h1>
            <div dangerouslySetInnerHTML={{ __html: event?.acf?.content }} />
        </div> 
      ))}
    </section>
  );
};

export default Events;
